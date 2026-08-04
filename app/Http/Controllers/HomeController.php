<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = [
            'banner' => [
                ['imagem' => 'imagem/banner1.jpg'],
                ['imagem' => 'imagem/banner2.jpg'],
            ],

            'sobre' => [
                'imagem' => 'imagem/perfil.png',
                'titulo' => 'Valéria Maciel',
                'texto' => 'Texto sobre a clínica.'
            ],

            'categorias' => [
                [
                    'titulo' => 'Botox',
                    'imagem' => 'imagem/botox.png'
                ],
                [
                    'titulo' => 'Limpeza de Pele',
                    'imagem' => 'imagem/limpeza.png'
                ]
            ]
        ];

        return view('home', compact('home'));
    }
}