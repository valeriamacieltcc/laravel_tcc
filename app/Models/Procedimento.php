<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    use HasFactory;

    protected $table = 'procedimentos';

    protected $fillable = [
        'categoria_procedimento_id',
        'nome',
        'descricao',
        'preco',
        'duracao_minutos',
        'imagem',
        'cuidados',
        'contraindicacoes',
        'ativo',
    ];

    protected $casts = [
        'preco' => 'decimal:2',
        'ativo' => 'boolean',
    ];

    public function categoria()
    {
        return $this->belongsTo(
            CategoriaProcedimento::class,
            'categoria_procedimento_id'
        );
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}