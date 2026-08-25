<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\FotoAcompanhamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoAcompanhamentoController extends Controller
{
    /**
     * Mostra o formulário para adicionar fotos.
     */
    public function create(Cliente $cliente)
    {
        $cliente->load('user');

        return view(
            'admin.clientes.fotos.create',
            compact('cliente')
        );
    }


    /**
     * Salva as fotos no banco e no storage.
     */
    public function store(Request $request, Cliente $cliente)
    {
        $dados = $request->validate([
            'foto_antes' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'foto_depois' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'procedimento' => [
                'nullable',
                'string',
                'max:255',
            ],

            'data' => [
                'nullable',
                'date',
            ],

            'observacao' => [
                'nullable',
                'string',
            ],
        ], [
            'foto_antes.image' =>
                'A foto de antes deve ser uma imagem.',

            'foto_depois.image' =>
                'A foto de depois deve ser uma imagem.',

            'foto_antes.max' =>
                'A foto de antes deve ter no máximo 5 MB.',

            'foto_depois.max' =>
                'A foto de depois deve ter no máximo 5 MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | FOTO DE ANTES
        |--------------------------------------------------------------------------
        */

        $fotoAntes = null;

        if ($request->hasFile('foto_antes')) {

            $fotoAntes = $request
                ->file('foto_antes')
                ->store(
                    'clientes/' . $cliente->id . '/acompanhamento',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | FOTO DE DEPOIS
        |--------------------------------------------------------------------------
        */

        $fotoDepois = null;

        if ($request->hasFile('foto_depois')) {

            $fotoDepois = $request
                ->file('foto_depois')
                ->store(
                    'clientes/' . $cliente->id . '/acompanhamento',
                    'public'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | SALVAR NO BANCO
        |--------------------------------------------------------------------------
        */

        FotoAcompanhamento::create([
            'cliente_id' => $cliente->id,

            'foto_antes' => $fotoAntes,

            'foto_depois' => $fotoDepois,

            'procedimento' =>
                $dados['procedimento'] ?? null,

            'data' =>
                $dados['data'] ?? null,

            'observacao' =>
                $dados['observacao'] ?? null,
        ]);


        return redirect()
            ->route(
                'admin.clientes.show',
                $cliente
            )
            ->with(
                'sucesso',
                'Fotos adicionadas com sucesso!'
            );
    }


    /**
     * Exclui um registro de fotos.
     */
    public function destroy(FotoAcompanhamento $foto)
    {
        /*
        |--------------------------------------------------------------------------
        | EXCLUIR FOTO DE ANTES
        |--------------------------------------------------------------------------
        */

        if ($foto->foto_antes) {

            Storage::disk('public')
                ->delete($foto->foto_antes);
        }


        /*
        |--------------------------------------------------------------------------
        | EXCLUIR FOTO DE DEPOIS
        |--------------------------------------------------------------------------
        */

        if ($foto->foto_depois) {

            Storage::disk('public')
                ->delete($foto->foto_depois);
        }


        $clienteId = $foto->cliente_id;

        $foto->delete();


        return redirect()
            ->route(
                'admin.clientes.show',
                $clienteId
            )
            ->with(
                'sucesso',
                'Fotos excluídas com sucesso!'
            );
    }
}