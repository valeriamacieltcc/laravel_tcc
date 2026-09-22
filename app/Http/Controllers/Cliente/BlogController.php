<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('publicado', true)
            ->with([
                'autor',
                'comentarios.usuario',
            ])
            ->withCount('curtidas')
            ->latest()
            ->get();

        return view('cliente.blog.index', compact('posts'));
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