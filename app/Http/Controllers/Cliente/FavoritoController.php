<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Favorito;
use App\Models\Procedimento;
use App\Models\Vitrine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FAVORITO DE PROCEDIMENTO
    |--------------------------------------------------------------------------
    */

    public function toggle($procedimento_id)
    {
        $user = auth()->user();

        $favorito = Favorito::where('user_id', $user->id)
            ->where('procedimento_id', $procedimento_id)
            ->first();

        if ($favorito) {

            $favorito->delete();

            return back()->with(
                'success',
                'Procedimento removido dos favoritos.'
            );
        }

        Favorito::create([
            'user_id' => $user->id,
            'procedimento_id' => $procedimento_id,
            'vitrine_id' => null,
        ]);

        return back()->with(
            'success',
            'Procedimento adicionado aos favoritos.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | FAVORITO DE PRODUTO DA VITRINE
    |--------------------------------------------------------------------------
    */

    public function toggleVitrine(Vitrine $produto)
    {
        $user = Auth::user();

        $favorito = Favorito::where('user_id', $user->id)
            ->where('vitrine_id', $produto->id)
            ->first();

        if ($favorito) {

            $favorito->delete();

            return back()->with(
                'success',
                'Produto removido dos favoritos.'
            );
        }

        Favorito::create([
            'user_id' => $user->id,
            'procedimento_id' => null,
            'vitrine_id' => $produto->id,
        ]);

        return back()->with(
            'success',
            'Produto adicionado aos favoritos.'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MEUS FAVORITOS
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $favoritos = Favorito::where('user_id', auth()->id())
            ->with([
                'procedimento',
                'vitrine'
            ])
            ->latest()
            ->get();

        return view(
            'cliente.favoritos.index',
            compact('favoritos')
        );
    }
}