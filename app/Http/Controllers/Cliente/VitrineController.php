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
            ->get();

        return view(
            'cliente.vitrine.loja',
            compact('vitrine')
        );
    }
}