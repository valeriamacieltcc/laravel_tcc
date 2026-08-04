<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $cliente = (object)[
            'nome' => session('nome', 'Livia Bueno'),

            'usuario' => 'Livia',

            'idade' => 35,

            'foto' => session(
                'foto',
                'imagem/perfil-livia.jpg'
            ),

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


    public function atualizar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);


        // Salva o novo nome na sessão
        session([
            'nome' => $request->nome
        ]);


        // Verifica se uma nova foto foi enviada
        if ($request->hasFile('foto')) {

            $foto = $request->file('foto');


            // Cria um nome único para a imagem
            $nomeFoto = time() . '_' . $foto->getClientOriginalName();


            // Salva a imagem dentro de:
            // public/imagem
            $foto->move(
                public_path('imagem'),
                $nomeFoto
            );


            // Salva o caminho da foto na sessão
            session([
                'foto' => 'imagem/' . $nomeFoto
            ]);
        }


        return redirect()
            ->route('perfil.index')
            ->with(
                'sucesso',
                'Perfil atualizado com sucesso!'
            );
    }
}