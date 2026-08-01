<?php

namespace Database\Seeders;

use App\Models\CategoriaProcedimento;
use Illuminate\Database\Seeder;

class CategoriaProcedimentoSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            [
                'nome' => 'Face',
                'descricao' => 'Procedimentos faciais.',
            ],
            [
                'nome' => 'Corpo',
                'descricao' => 'Procedimentos corporais.',
            ],
            [
                'nome' => 'Cabelo',
                'descricao' => 'Procedimentos capilares.',
            ],
            [
                'nome' => 'Unhas',
                'descricao' => 'Procedimentos de manicure e pedicure.',
            ],
            [
                'nome' => 'Massagem',
                'descricao' => 'Massagens e tratamentos relaxantes.',
            ],
        ];

        foreach ($categorias as $categoria) {
            CategoriaProcedimento::firstOrCreate(
                ['nome' => $categoria['nome']],
                $categoria
            );
        }
    }
}