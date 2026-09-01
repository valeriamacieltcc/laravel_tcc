<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function updateStatus(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'status' => 'required|in:pendente,confirmado,concluido,cancelado',
        ]);

        $agendamento->status = $request->status;

        if ($request->status === 'cancelado') {
            $agendamento->cancelado_em = now();
        } else {
            $agendamento->cancelado_em = null;
        }

        $agendamento->save();

        return back()->with(
            'success',
            'Status atualizado com sucesso!'
        );
    }
}