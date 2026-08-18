<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CategoriaProcedimentoSeeder::class);
        $this->call(TesteSeeder::class);
    }
}