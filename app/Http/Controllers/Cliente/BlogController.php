<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categoria = $request->categoria;
    
        $posts = Post::where('publicado', true)
            ->with('autor')
            ->withCount('curtidas')
            ->when($categoria && $categoria !== 'todos', function ($query) use ($categoria) {
                $query->where('categoria', $categoria);
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();
    
        $categorias = [
            'Dicas',
            'Pele',
            'Cabelo',
            'Unhas',
            'Maquiagem',
            'Estética',
            'Cuidados'
        ];
    
        return view('cliente.blog.index', compact(
            'posts',
            'categorias',
            'categoria'
        ));
    }

    public function show(Post $post)
    {
        abort_unless($post->publicado, 404);

        $post->load([
            'autor',
            'comentarios.usuario',
        ]);

        $post->loadCount('curtidas');

        return view('cliente.blog.show', compact('post'));
    }
}