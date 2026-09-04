<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        $dataNascimento = fake()->dateTimeBetween('-60 years', '-18 years');

        return [
            'user_id' => User::factory(),

            'telefone' => fake()->numerify('(15) 9####-####'),

            'data_nascimento' => $dataNascimento,

            'cpf' => fake()->unique()->numerify('###.###.###-##'),

            'cep' => fake()->numerify('#####-###'),

            'logradouro' => fake()->streetName(),

            'numero' => fake()->buildingNumber(),

            'complemento' => fake()->optional()->randomElement([
                'Casa',
                'Apartamento',
                'Fundos',
                'Bloco A',
                null
            ]),

            'bairro' => fake()->randomElement([
                'Centro',
                'Jardim América',
                'Jardim São Paulo',
                'Vila Esperança',
                'Jardim Paulista'
            ]),

            'cidade' => 'Tatuí',

            'estado' => 'SP',

            'foto_perfil' => null,
        ];
    }}