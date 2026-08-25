<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromisso extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descricao',
        'data',
        'hora_inicio',
        'hora_fim',
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}