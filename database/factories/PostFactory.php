<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $titulo = fake()->randomElement([
            'Cuidados essenciais para manter a pele saudável',
            'Como cuidar dos cabelos no dia a dia',
            'A importância da limpeza de pele',
            'Dicas para manter as unhas bonitas',
            'Cuidados após procedimentos estéticos',
            'Como escolher o procedimento ideal para você',
            'Benefícios da hidratação facial',
            'Cuidados para cabelos ressecados',
            'Dicas para uma rotina de skincare',
            'Como manter os resultados dos procedimentos',
            'Tendências de beleza para este ano',
            'Cuidados antes de realizar um procedimento',
        ]);

        return [
            'user_id' => User::where('tipo', 'admin')->first()?->id ?? User::factory(),
            'titulo' => $titulo,
            'slug' => Str::slug($titulo) . '-' . fake()->unique()->numberBetween(1, 99999),
            'imagem' => fake()->randomElement([
                'https://images.unsplash.com/photo-1515377905703-c4788e51af15',
                'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881',
                'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908',
                'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e',
            ]),
            'categoria' => fake()->randomElement([
                'Cabelo',
                'Pele',
                'Unhas',
                'Maquiagem',
                'Estética',
                'Cuidados',
            ]),
            'conteudo' => fake()->paragraphs(4, true),
            'publicado' => true,
        ];
    }
}