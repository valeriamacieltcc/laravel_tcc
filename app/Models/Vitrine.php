<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vitrine extends Model
{
    use HasFactory;
    
    protected $table = 'vitrine';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'marca',
        'categoria',
        'disponivel',
        'link_contato',
    ];

    protected $casts = [
        'preco' => 'decimal:2',
        'disponivel' => 'boolean',
    ];
}