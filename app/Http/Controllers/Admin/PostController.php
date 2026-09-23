<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('autor')
            ->withCount(['curtidas', 'comentarios'])
            ->latest()
            ->get();

        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'categoria' => ['nullable', 'string', 'max:100'],
            'conteudo' => ['required', 'string'],
            'imagem' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'publicado' => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request->file('imagem')
                ->store('posts', 'public');
        }

        $dados['user_id'] = Auth::id();
        $dados['slug'] = Str::slug($dados['titulo']);
        $dados['publicado'] = $request->boolean('publicado');

        Post::create($dados);

        return redirect()
            ->route('admin.blog.index')
            ->with('sucesso', 'Publicação criada com sucesso!');
    }

    public function show($id)
    {
        $post = Post::with([
            'autor',
            'comentarios.usuario',
        ])
        ->withCount('curtidas')
        ->findOrFail($id);
    
        return view('admin.blog.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'categoria' => ['nullable', 'string', 'max:100'],
            'conteudo' => ['required', 'string'],
            'imagem' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'publicado' => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('imagem')) {

            if ($post->imagem) {
                Storage::disk('public')->delete($post->imagem);
            }

            $dados['imagem'] = $request->file('imagem')
                ->store('posts', 'public');
        }

        $dados['slug'] = Str::slug($dados['titulo']);
        $dados['publicado'] = $request->boolean('publicado');

        $post->update($dados);

        return redirect()
            ->route('admin.blog.index')
            ->with('sucesso', 'Publicação atualizada com sucesso!');
    }

    public function destroy(Post $post)
    {
        if ($post->imagem) {
            Storage::disk('public')->delete($post->imagem);
        }

        $post->delete();

        return redirect()
            ->route('admin.blog.index')
            ->with('sucesso', 'Publicação excluída com sucesso!');
    }
}