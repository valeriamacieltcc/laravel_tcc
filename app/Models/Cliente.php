<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anamnese;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telefone',
        'data_nascimento',
        'cpf',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'foto_perfil',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }

    public function anamnese()
{
    return $this->hasOne(Anamnese::class);
}

public function fotosAcompanhamento()
{
    return $this->hasMany(FotoAcompanhamento::class);
}

}