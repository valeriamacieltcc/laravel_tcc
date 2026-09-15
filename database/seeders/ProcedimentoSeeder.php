<?php

namespace Database\Seeders;

use App\Models\Procedimento;
use Illuminate\Database\Seeder;

class ProcedimentoSeeder extends Seeder
{

    
    public function run(): void
    {
        Procedimento::factory()->count(15)->create();
    }
}