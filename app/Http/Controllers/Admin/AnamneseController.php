<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Anamnese;
use Illuminate\Http\Request;

class AnamneseController extends Controller
{
    public function edit(Cliente $cliente)
    {
        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese',
            compact(
                'cliente',
                'anamnese'
            )
        );
    }


    public function update(
        Request $request,
        Cliente $cliente
    ) {

        $dados = $request->validate([

            'alergias' =>
                'nullable|string',

            'medicamentos' =>
                'nullable|string',

            'doencas' =>
                'nullable|string',

            'cirurgias' =>
                'nullable|string',

            'observacoes' =>
                'nullable|string',

        ]);


        $dados['gestante'] =
            $request->boolean('gestante');

        $dados['pressao_alta'] =
            $request->boolean('pressao_alta');

        $dados['diabetes'] =
            $request->boolean('diabetes');


        Anamnese::updateOrCreate(

            [
                'cliente_id' =>
                    $cliente->id
            ],

            $dados

        );


        return redirect()
            ->route(
                'admin.clientes.show',
                $cliente
            )
            ->with(
                'sucesso',
                'Ficha de anamnese atualizada!'
            );
    }
}