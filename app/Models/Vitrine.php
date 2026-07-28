<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vitrine extends Model
{
    protected $table = 'vitrine';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'marca',
        'estoque'
    ];
}