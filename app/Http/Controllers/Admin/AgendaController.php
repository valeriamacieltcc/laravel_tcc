<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Compromisso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index()
    {
        return view('admin.agenda.index');
    }


    public function eventos()
    {
        /*
        |--------------------------------------------------------------------------
        | AGENDAMENTOS DAS CLIENTES
        |--------------------------------------------------------------------------
        */

        $agendamentos = Agendamento::with([
            'cliente.user',
            'procedimento'
        ])->get();


        $eventosAgendamentos = $agendamentos->map(function ($agendamento) {

            return [

                'id' => 'agendamento-' . $agendamento->id,

                'title' =>
                    ($agendamento->procedimento->nome ?? 'Procedimento')
                    . ' - '
                    . ($agendamento->cliente->user->name ?? 'Cliente'),

                'start' =>
                    $agendamento->data_agendamento
                    . 'T'
                    . $agendamento->hora_agendamento,

                'extendedProps' => [

                    'tipo' => 'agendamento',

                    'cliente' =>
                        $agendamento->cliente->user->name ?? 'Cliente',

                    'procedimento' =>
                        $agendamento->procedimento->nome ?? 'Procedimento',

                ],

            ];

        });


        /*
        |--------------------------------------------------------------------------
        | COMPROMISSOS DA ADMIN
        |--------------------------------------------------------------------------
        */

        $compromissos = Compromisso::where(
            'user_id',
            Auth::id()
        )->get();


        $eventosCompromissos = $compromissos->map(function ($compromisso) {

            return [

                'id' => 'compromisso-' . $compromisso->id,

                'title' =>
                    $compromisso->titulo,

                'start' =>
                    $compromisso->data->format('Y-m-d')
                    . 'T'
                    . $compromisso->hora_inicio,

                'end' =>
                    $compromisso->data->format('Y-m-d')
                    . 'T'
                    . $compromisso->hora_fim,

                'extendedProps' => [

                    'tipo' => 'compromisso',

                    'descricao' =>
                        $compromisso->descricao,

                    'compromisso_id' =>
                        $compromisso->id,

                ],

            ];

        });


        /*
        |--------------------------------------------------------------------------
        | JUNTA TUDO
        |--------------------------------------------------------------------------
        */

        return response()->json(
            $eventosAgendamentos
                ->concat($eventosCompromissos)
                ->values()
        );
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => 'required|string|max:255',
            'data' => 'required|date',
            'hora_inicio' => 'required',
            'hora_fim' => 'required|after:hora_inicio',
            'descricao' => 'nullable|string',
        ]);
    
        Compromisso::create([
            'user_id' => Auth::id(),
            'titulo' => $dados['titulo'],
            'descricao' => $dados['descricao'] ?? null,
            'data' => $dados['data'],
            'hora_inicio' => $dados['hora_inicio'],
            'hora_fim' => $dados['hora_fim'],
        ]);
    
        return redirect()
            ->route('admin.agenda.index')
            ->with('sucesso', 'Compromisso adicionado à agenda!');
    

    }


    public function destroy(Compromisso $compromisso)
    {
        $compromisso->delete();

        return redirect()
            ->route('admin.agenda.index')
            ->with(
                'sucesso',
                'Compromisso excluído!'
            );
    }
}