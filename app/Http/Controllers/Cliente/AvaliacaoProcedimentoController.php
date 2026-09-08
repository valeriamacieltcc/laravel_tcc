<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\AvaliacaoProcedimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvaliacaoProcedimentoController extends Controller
{
    /**
     * Exibe o formulário de avaliação.
     */
    public function create(Agendamento $agendamento)
    {
        $cliente = Auth::user()->cliente;

        // Verifica se o agendamento realmente pertence à cliente.
        if ($agendamento->cliente_id !== $cliente->id) {
            abort(403);
        }

        // Só pode avaliar quando estiver concluído.
        if ($agendamento->status !== 'concluido') {
            return redirect()
                ->route('cliente.agendamentos.index')
                ->with(
                    'erro',
                    'Você só pode avaliar procedimentos concluídos.'
                );
        }

        // Não permite avaliar duas vezes o mesmo agendamento.
        if ($agendamento->avaliacao) {
            return redirect()
                ->route('cliente.agendamentos.index')
                ->with(
                    'erro',
                    'Este procedimento já foi avaliado.'
                );
        }

        $agendamento->load('procedimento');

        return view(
            'cliente.avaliacoes.create',
            compact('agendamento')
        );
    }


    /**
     * Salva a avaliação.
     */
    public function store(
        Request $request,
        Agendamento $agendamento
    ) {
        $cliente = Auth::user()->cliente;

        // Segurança: o agendamento precisa ser da cliente logada.
        if ($agendamento->cliente_id !== $cliente->id) {
            abort(403);
        }

        // Só pode avaliar concluídos.
        if ($agendamento->status !== 'concluido') {
            return redirect()
                ->route('cliente.agendamentos.index')
                ->with(
                    'erro',
                    'Você só pode avaliar procedimentos concluídos.'
                );
        }

        // Impede avaliação duplicada.
        if ($agendamento->avaliacao) {
            return redirect()
                ->route('cliente.agendamentos.index')
                ->with(
                    'erro',
                    'Este procedimento já foi avaliado.'
                );
        }

        $dados = $request->validate(
            [
                'nota' => [
                    'required',
                    'integer',
                    'min:1',
                    'max:5',
                ],

                'comentario' => [
                    'nullable',
                    'string',
                    'max:1000',
                ],
            ],
            [
                'nota.required' =>
                    'Escolha uma nota.',

                'nota.integer' =>
                    'A nota precisa ser um número.',

                'nota.min' =>
                    'A nota mínima é 1 estrela.',

                'nota.max' =>
                    'A nota máxima é 5 estrelas.',

                'comentario.max' =>
                    'O comentário pode ter no máximo 1000 caracteres.',
            ]
        );

        AvaliacaoProcedimento::create([
            'agendamento_id' => $agendamento->id,
            'user_id' => Auth::id(),
            'procedimento_id' => $agendamento->procedimento_id,
            'nota' => $dados['nota'],
            'comentario' => $dados['comentario'] ?? null,
        ]);

        return redirect()
            ->route('cliente.agendamentos.index')
            ->with(
                'sucesso',
                'Sua avaliação foi enviada com sucesso!'
            );
    }
}