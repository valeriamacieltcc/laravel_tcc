<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->cascadeOnDelete();

            $table->foreignId('procedimento_id')
                ->constrained('procedimentos')
                ->restrictOnDelete();

            $table->date('data_agendamento');
            $table->time('hora_agendamento');

            $table->enum('status', [
                'pendente',
                'confirmado',
                'concluido',
                'cancelado'
            ])->default('pendente');

            $table->text('observacoes_cliente')->nullable();
            $table->text('observacoes_admin')->nullable();
            $table->timestamp('cancelado_em')->nullable();
            $table->string('motivo_cancelamento')->nullable();

            $table->timestamps();

            $table->unique(
                ['data_agendamento', 'hora_agendamento'],
                'horario_agendamento_unico'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};