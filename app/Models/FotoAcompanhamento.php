<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoAcompanhamento extends Model
{
    protected $table = 'fotos_acompanhamentos';

    protected $fillable = [
        'cliente_id',
        'foto_antes',
        'foto_depois',
        'procedimento',
        'data',
        'observacao',
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}