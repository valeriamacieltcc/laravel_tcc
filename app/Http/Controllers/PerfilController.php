<?php

namespace App\Http\Controllers;

class PerfilController extends Controller
{
    public function index()
    {
        $cliente = (object)[
            'nome' => 'Livia Bueno',
            'usuario' => 'Livia',
            'idade' => 35,
            'foto' => 'imagem/perfil-livia.jpg',

            'antes_depois' => [
                'imagem/antes1.jpg',
                'imagem/antes2.jpg',
                'imagem/antes3.jpg',
                'imagem/antes4.jpg',
            ],

            'procedimentos' => [
                [
                    'nome' => 'Limpeza de Pele',
                    'data' => '10/02/2026',
                    'observacao' => 'Tudo ocorreu normalmente.'
                ],
                [
                    'nome' => 'Peeling Químico',
                    'data' => '20/03/2026',
                    'observacao' => 'Boa evolução da pele.'
                ]
            ],

            'anamnese' => [
                'alergias' => 'Nenhuma',
                'medicamentos' => 'Vitamina D',
                'doencas' => 'Nenhuma',
                'observacoes' => 'Pele sensível.'
            ],

            'favoritos' => [
                'Protocolo Acne',
                'Sérum Vitamina C'
            ]
        ];

        return view('perfil.index', compact('cliente'));
    }
}