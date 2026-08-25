<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fotos_acompanhamentos', function (Blueprint $table) {

            $table->id();

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->cascadeOnDelete();

            $table->string('foto_antes')
                ->nullable();

            $table->string('foto_depois')
                ->nullable();

            $table->string('procedimento')
                ->nullable();

            $table->date('data')
                ->nullable();

            $table->text('observacao')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fotos_acompanhamentos');
    }
};