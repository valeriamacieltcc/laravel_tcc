<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ProcedimentoController extends Controller
// {
//     public function index()
//     {
//         return view('procedimento.index');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    public function index()
    {
        return view('procedimento.index');
    }

    public function show($slug)
    {
        $procedimentos = [

            'limpeza-de-pele' => [

                'titulo' => 'LIMPEZA DE PELE',

                'descricao' => 'Cuidar da pele vai muito além da estética, é uma forma de manter a saúde e o equilíbrio do rosto no dia a dia. A limpeza de pele é um procedimento essencial para remover impurezas, desobstruir os poros e eliminar cravos e células mortas que se acumulam com o tempo.
                Além de deixar a pele mais limpa e renovada, o tratamento ajuda a controlar a oleosidade, prevenir acne e melhorar a absorção de produtos, proporcionando um aspecto mais saudável, leve e iluminado. É um momento de cuidado, relaxamento e bem-estar que faz diferença já nas primeiras sessões.
                Agende seu horário e sinta na pele o resultado de um cuidado profissional ',

                'imagem1' => 'https://static.wixstatic.com/media/afabd4_488269c01aba4c73816d62fe6dce41d2~mv2.jpg/v1/fill/w_980,h_980,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/afabd4_488269c01aba4c73816d62fe6dce41d2~mv2.jpg',

                'imagem2' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQP1m2xMCo52EMqMiQK23PyNtr5jzucCiHYO_Ub8RMpzYtvSb6bejevl7-&s=10',

                'imagem3' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1a_Cm3T-kV4enP75uDgQDZdT42D4qUXYp7i4rXdxqM3gPWpkNa_ZwAtk&s=10',

            ],

        ];

        if (!isset($procedimentos[$slug])) {
            abort(404);
        }

        return view('procedimento.show', [
            'procedimento' => $procedimentos[$slug]
        ]);
    }
}