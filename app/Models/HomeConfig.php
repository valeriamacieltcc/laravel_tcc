<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeConfig extends Model
{
    use HasFactory;

    protected $table = 'home_configs';

    protected $fillable = [
        'banner_1',
        'banner_2',
        'banner_3',

        'sobre_imagem',
        'sobre_titulo',
        'sobre_texto',

        'categoria_1_imagem',
        'categoria_1_nome',

        'categoria_2_imagem',
        'categoria_2_nome',

        'categoria_3_imagem',
        'categoria_3_nome',

        'categoria_4_imagem',
        'categoria_4_nome',
    ];
}