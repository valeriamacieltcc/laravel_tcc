<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Anamnese;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {

            $cliente = Cliente::factory()->create();

            Anamnese::factory()->create([
                'cliente_id' => $cliente->id,
            ]);
        }
    }
}
