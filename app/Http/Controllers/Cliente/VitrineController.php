<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Vitrine;
use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->input('pesquisa');
        $categoria = $request->input('categoria');

        $vitrine = Vitrine::where('disponivel', true)

            ->when($pesquisa, function ($query, $pesquisa) {

                $query->where(function ($q) use ($pesquisa) {

                    $q->where('nome', 'like', '%' . $pesquisa . '%')
                        ->orWhere('marca', 'like', '%' . $pesquisa . '%')
                        ->orWhere('descricao', 'like', '%' . $pesquisa . '%');

                });

            })

            ->when($categoria && $categoria !== 'Todos', function ($query) use ($categoria) {

                $query->where('categoria', $categoria);

            })

            ->orderBy('nome')
            ->paginate(8)
            ->withQueryString();

        $categorias = [
            'Todos',
            'Cabelo',
            'Maquiagem',
            'Perfumaria',
            'Skincare',
            'Unhas',
        ];

        return view(
            'cliente.vitrine.loja',
            compact(
                'vitrine',
                'pesquisa',
                'categoria',
                'categorias'
            )
        );
    }
}