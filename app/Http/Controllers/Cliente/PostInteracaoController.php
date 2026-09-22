<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\ComentarioPost;
use App\Models\CurtidaPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostInteracaoController extends Controller
{
    public function curtir(Post $post)
    {
        $curtida = CurtidaPost::where('post_id', $post->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($curtida) {
            $curtida->delete();

            return back();
        }

        CurtidaPost::create([
            'post_id' => $post->id,
            'user_id' => Auth::id(),
        ]);

        return back();
    }

    public function comentar(Request $request, Post $post)
    {
        $dados = $request->validate([
            'comentario' => ['required', 'string', 'max:1000'],
        ], [
            'comentario.required' => 'Digite um comentário.',
            'comentario.max' => 'O comentário deve ter no máximo 1000 caracteres.',
        ]);

        ComentarioPost::create([
            'post_id' => $post->id,
            'user_id' => Auth::id(),
            'comentario' => $dados['comentario'],
        ]);

        return back()->with('sucesso', 'Comentário publicado!');
    }
}