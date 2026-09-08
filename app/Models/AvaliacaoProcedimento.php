<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoProcedimento extends Model
{
    use HasFactory;

    protected $table = 'avaliacoes_procedimentos';

    protected $fillable = [
        'agendamento_id',
        'user_id',
        'procedimento_id',
        'nota',
        'comentario',
    ];

    public function agendamento()
    {
        return $this->belongsTo(
            Agendamento::class
        );
    }

    public function cliente()
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }

    public function procedimento()
    {
        return $this->belongsTo(
            Procedimento::class
        );
    }
}