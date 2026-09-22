<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'titulo',
        'slug',
        'imagem',
        'categoria',
        'conteudo',
        'publicado',
    ];

    protected $casts = [
        'publicado' => 'boolean',
    ];

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function curtidas()
    {
        return $this->hasMany(CurtidaPost::class, 'post_id');
    }

    public function comentarios()
    {
        return $this->hasMany(ComentarioPost::class, 'post_id');
    }
}