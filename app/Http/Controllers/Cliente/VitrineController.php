<?php
namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Vitrine;


class VitrineController extends Controller
{
    public function index()
    {
        $vitrine = Vitrine::where('disponivel', true)
            ->orderBy('nome')
            ->paginate(8);

        return view(
            'cliente.vitrine.loja',
            compact('vitrine')
        );
    }
}