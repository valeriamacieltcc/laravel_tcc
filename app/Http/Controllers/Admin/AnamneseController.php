<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Anamnese;
use Illuminate\Http\Request;

class AnamneseController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | VISUALIZAR FICHA
    |--------------------------------------------------------------------------
    */

    public function show(Cliente $cliente)
    {
        $cliente->load('user');

        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese',
            compact(
                'cliente',
                'anamnese'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EDITAR
    |--------------------------------------------------------------------------
    */

    public function edit(Cliente $cliente)
    {
        $cliente->load('user');

        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese-edit',
            compact(
                'cliente',
                'anamnese'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ATUALIZAR
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        Cliente $cliente
    )
    {
        $dados = $request->except([
            '_token',
            '_method'
        ]);


        Anamnese::updateOrCreate(
            [
                'cliente_id' => $cliente->id
            ],
            $dados
        );


        return redirect()
            ->route(
                'admin.clientes.anamnese.show',
                $cliente
            )
            ->with(
                'sucesso',
                'Ficha atualizada com sucesso!'
            );
    }
}