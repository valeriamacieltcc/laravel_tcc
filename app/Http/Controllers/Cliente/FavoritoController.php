<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Favorito;
use App\Models\Procedimento;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    public function toggle($procedimento_id)
    {
        $user = auth()->user();

        $favorito = Favorito::where('user_id', $user->id)
            ->where('procedimento_id', $procedimento_id)
            ->first();

        if ($favorito) {
            $favorito->delete();

            return back()->with('success', 'Procedimento removido dos favoritos.');
        }

        Favorito::create([
            'user_id' => $user->id,
            'procedimento_id' => $procedimento_id,
        ]);

        return back()->with('success', 'Procedimento adicionado aos favoritos.');
    }

    public function index()
    {
        $favoritos = Favorito::where('user_id', auth()->id())
            ->with('procedimento')
            ->latest()
            ->get();

        return view('cliente.favoritos.index', compact('favoritos'));
    }
}