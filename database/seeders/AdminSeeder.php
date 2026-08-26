<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'valeria@gmail.com'],
            [
                'name' => 'Valeria',
                'password' => Hash::make('12345678'),
                'tipo' => 'admin',
            ]
        );
    }
}