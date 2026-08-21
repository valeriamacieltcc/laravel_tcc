<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;

class VitrineController extends Controller
{
    public function index()
    {
        $vitrine = Vitrine::where('disponivel', true)
            ->orderBy('nome')
            ->get();

        return view(
            'vitrine.loja',
            compact('vitrine')
        );
    }
}