<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioPost extends Model
{
    use HasFactory;

    protected $table = 'comentarios_posts';

    protected $fillable = [
        'post_id',
        'user_id',
        'comentario',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}