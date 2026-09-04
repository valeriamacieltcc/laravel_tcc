<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('procedimento_id')
                ->constrained('procedimentos')
                ->cascadeOnDelete();

            $table->timestamps();

            // Impede o mesmo usuário de favoritar
            // o mesmo procedimento mais de uma vez
            $table->unique(['user_id', 'procedimento_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favoritos');
    }
};