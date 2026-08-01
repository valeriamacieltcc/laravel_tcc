<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'procedimento_id',
        'data_agendamento',
        'hora_agendamento',
        'status',
        'observacoes_cliente',
        'observacoes_admin',
        'cancelado_em',
        'motivo_cancelamento',
    ];

    protected $casts = [
        'data_agendamento' => 'date',
        'cancelado_em' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function procedimento()
    {
        return $this->belongsTo(Procedimento::class);
    }
}