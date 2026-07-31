<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = [

            'banner' => [

                [
                    'imagem' => 'https://i.pinimg.com/1200x/cf/f1/a2/cff1a2994e6447a975c39c4ef6b44abe.jpg'
                ],

                [
                    'imagem' => 'https://i.pinimg.com/1200x/a2/ca/36/a2ca365239e8894df6fa487e31d3a89e.jpg'
                ],

                [
                    'imagem' => 'https://i.pinimg.com/736x/b5/c2/31/b5c2318a43b336e87875193bf0fc15b5.jpg'
                ],

            ],

            'sobre' => [

                'imagem' => 'https://i.pinimg.com/736x/c5/ac/77/c5ac77654151b0712c786a7174c85912.jpg',

                'titulo' => 'QUEM SOU?',

                'texto' => 'Valéria Maciel Estética é um espaço dedicado ao cuidado, bem-estar e autoestima. Com profissionais especializados, oferecemos serviços personalizados para elevar sua beleza natural e proporcionar uma experiência acolhedora.'

            ],

            'categorias' => [

                [
                    'titulo' => 'CORPO',
                    'imagem' => 'https://i.pinimg.com/1200x/bb/0d/ff/bb0dff7adbd80c5ae3322f070bc562ed.jpg'
                ],

                [
                    'titulo' => 'FACE',
                    'imagem' => 'https://i.pinimg.com/736x/3b/93/99/3b93992768d7266d2de4d6fe7054fe63.jpg'
                ],

                [
                    'titulo' => 'CABELO',
                    'imagem' => 'https://i.pinimg.com/736x/85/54/39/85543969a0ca3ff9040745386c4418e9.jpg'
                ],

                [
                    'titulo' => 'UNHA',
                    'imagem' => 'https://i.pinimg.com/736x/c6/12/e6/c612e651df488d64a48ce23eda24ce18.jpg'
                ],

            ]

        ];

        return view('home', compact('home'));
    }
}