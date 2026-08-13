<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProcedimento extends Model
{
    use HasFactory;

    protected $table = 'categorias_procedimentos';

    protected $fillable = [
        'nome',
        'descricao',
        'ativo',
    ];

    protected $casts = [
        'ativo' => 'boolean',
    ];

    public function procedimentos()
    {
        return $this->hasMany(Procedimento::class);
    }
}