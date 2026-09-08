<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avaliacoes_procedimentos', function (Blueprint $table) {

            $table->id();

            $table->foreignId('agendamento_id')
                ->constrained('agendamentos')
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('procedimento_id')
                ->constrained('procedimentos')
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('nota');

            $table->text('comentario')->nullable();

            $table->timestamps();

            // Um agendamento só pode receber uma avaliação
            $table->unique('agendamento_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avaliacoes_procedimentos');
    }
};