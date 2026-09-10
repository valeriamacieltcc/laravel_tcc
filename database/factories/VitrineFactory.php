<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vitrine>
 */
class VitrineFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->sentence(3),

            'descricao' => fake()->paragraph(2),

            'preco' => fake()->randomFloat(2, 20, 300),

            'imagem' => null,

            'marca' => fake()->randomElement([
                'O Boticário',
                'Eudora',
            ]),
            'categoria' => fake()->randomElement([
                'Cabelo',
                'Maquiagem',
                'Perfumaria',
                'Skincare',
                'Unhas',
            ]),

            'disponivel' => true,

            'link_contato' => null,
        ];
    }
}