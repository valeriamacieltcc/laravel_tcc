<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Procedimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AgendamentoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $cliente = $user->cliente;
    
        $agendamentos = $cliente->agendamentos()
            ->with('procedimento')
            ->orderBy('data_agendamento', 'desc')
            ->paginate(5);
    
        return view(
            'cliente.agendamentos.index',
            compact('agendamentos')
        );
    }

    public function create()
    {
        $procedimentos = Procedimento::where('ativo', true)
            ->orderBy('nome')
            ->get();

        return view(
            'cliente.agendamentos.create',
            compact('procedimentos')
        );
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'procedimento_id' => [
                'required',
                'exists:procedimentos,id',
            ],

            'data_agendamento' => [
                'required',
                'date',
                'after_or_equal:today',
            ],

            'hora_agendamento' => [
                'required',
                'date_format:H:i',
            ],

            'observacoes_cliente' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ], [
            'procedimento_id.required' =>
                'Escolha um procedimento.',

            'data_agendamento.required' =>
                'Escolha uma data.',

            'data_agendamento.after_or_equal' =>
                'A data não pode ser anterior a hoje.',

            'hora_agendamento.required' =>
                'Escolha um horário.',
        ]);

        $procedimento = Procedimento::findOrFail(
            $dados['procedimento_id']
        );
        
        $inicioNovo = Carbon::parse(
            $dados['data_agendamento'] . ' ' .
            $dados['hora_agendamento']
        );
        
        $fimNovo = $inicioNovo
            ->copy()
            ->addMinutes($procedimento->duracao_minutos);
        
        $agendamentosDoDia = Agendamento::with('procedimento')
            ->whereDate(
                'data_agendamento',
                $dados['data_agendamento']
            )
            ->whereIn('status', [
                'pendente',
                'confirmado',
            ])
            ->get();
        
        $horarioOcupado = $agendamentosDoDia->contains(
            function ($agendamento) use (
                $inicioNovo,
                $fimNovo,
                $dados
            ) {
                $inicioExistente = Carbon::parse(
                    $dados['data_agendamento'] . ' ' .
                    $agendamento->hora_agendamento
                );
        
                $duracaoExistente =
                    $agendamento->procedimento
                        ->duracao_minutos ?? 60;
        
                $fimExistente = $inicioExistente
                    ->copy()
                    ->addMinutes($duracaoExistente);
        
                return $inicioNovo->lt($fimExistente)
                    && $fimNovo->gt($inicioExistente);
            }
        );
        
        if ($horarioOcupado) {
            return back()
                ->withErrors([
                    'hora_agendamento' =>
                        'Esse horário entra em conflito com outro agendamento.',
                ])
                ->withInput();
        }

        if ($horarioOcupado) {
            return back()
                ->withErrors([
                    'hora_agendamento' =>
                        'Este horário já está ocupado.',
                ])
                ->withInput();
        }

        $cliente = Auth::user()->cliente;

        Agendamento::create([
            'cliente_id' => $cliente->id,
            'procedimento_id' => $dados['procedimento_id'],
            'data_agendamento' => $dados['data_agendamento'],
            'hora_agendamento' => $dados['hora_agendamento'],
            'status' => 'pendente',
            'observacoes_cliente' =>
                $dados['observacoes_cliente'] ?? null,
        ]);

        return redirect()
            ->route('cliente.agendamentos.index')
            ->with(
                'sucesso',
                'Agendamento solicitado com sucesso!'
            );
    }

    public function cancelar(Agendamento $agendamento)
    {
        $cliente = Auth::user()->cliente;

        if ($agendamento->cliente_id !== $cliente->id) {
            abort(403);
        }

        if (in_array(
            $agendamento->status,
            ['concluido', 'cancelado']
        )) {
            return back()->with(
                'erro',
                'Este agendamento não pode ser cancelado.'
            );
        }

        $agendamento->update([
            'status' => 'cancelado',
            'cancelado_em' => now(),
        ]);

        return back()->with(
            'sucesso',
            'Agendamento cancelado.'
        );
    }

    public function horariosDisponiveis(Request $request)
{
    $request->validate([
        'procedimento_id' => [
            'required',
            'exists:procedimentos,id',
        ],

        'data' => [
            'required',
            'date',
            'after_or_equal:today',
        ],
    ]);

    $procedimento = Procedimento::findOrFail(
        $request->procedimento_id
    );

    $data = Carbon::parse($request->data);

    // Domingo não terá atendimento.
    if ($data->isSunday()) {
        return response()->json([
            'horarios' => [],
            'mensagem' => 'Não há atendimento aos domingos.',
        ]);
    }

    $agendamentosDoDia = Agendamento::with('procedimento')
        ->whereDate('data_agendamento', $request->data)
        ->whereIn('status', [
            'pendente',
            'confirmado',
        ])
        ->get();

    /*
     * Horários de funcionamento:
     * Manhã: 08:00 às 12:00
     * Tarde: 13:00 às 18:00
     */
    $periodos = [
        [
            'inicio' => '08:00',
            'fim' => '12:00',
        ],
        [
            'inicio' => '13:00',
            'fim' => '18:00',
        ],
    ];

    $horariosDisponiveis = [];

    foreach ($periodos as $periodo) {
        $inicioPeriodo = Carbon::parse(
            $request->data . ' ' . $periodo['inicio']
        );

        $fimPeriodo = Carbon::parse(
            $request->data . ' ' . $periodo['fim']
        );

        $horarioAtual = $inicioPeriodo->copy();

        while ($horarioAtual->lt($fimPeriodo)) {
            $fimDoNovoAgendamento = $horarioAtual
                ->copy()
                ->addMinutes($procedimento->duracao_minutos);

            /*
             * Não mostra o horário se o procedimento terminar
             * depois do fechamento.
             */
            if ($fimDoNovoAgendamento->gt($fimPeriodo)) {
                break;
            }

            $estaOcupado = $agendamentosDoDia->contains(
                function ($agendamento) use (
                    $request,
                    $horarioAtual,
                    $fimDoNovoAgendamento
                ) {
                    $inicioExistente = Carbon::parse(
                        $request->data . ' ' .
                        $agendamento->hora_agendamento
                    );

                    $duracaoExistente =
                        $agendamento->procedimento
                            ->duracao_minutos ?? 60;

                    $fimExistente = $inicioExistente
                        ->copy()
                        ->addMinutes($duracaoExistente);

                    /*
                     * Existe conflito quando:
                     *
                     * o novo começa antes do existente terminar
                     * e o novo termina depois do existente começar.
                     */
                    return $horarioAtual->lt($fimExistente)
                        && $fimDoNovoAgendamento->gt(
                            $inicioExistente
                        );
                }
            );

            /*
             * Não disponibiliza um horário que já passou,
             * caso a data escolhida seja hoje.
             */
            $horarioJaPassou = $data->isToday()
                && $horarioAtual->lte(now());

            if (!$estaOcupado && !$horarioJaPassou) {
                $horariosDisponiveis[] =
                    $horarioAtual->format('H:i');
            }

            // Cria opções de 30 em 30 minutos.
            $horarioAtual->addMinutes(30);
        }
    }

    return response()->json([
        'horarios' => $horariosDisponiveis,
        'duracao' => $procedimento->duracao_minutos,
    ]);
}
}