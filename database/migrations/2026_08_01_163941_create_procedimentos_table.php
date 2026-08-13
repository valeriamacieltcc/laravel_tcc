<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('procedimentos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('categoria_procedimento_id')
                ->nullable()
                ->constrained('categorias_procedimentos')
                ->nullOnDelete();

            $table->string('nome');
            $table->text('descricao');
            $table->decimal('preco', 10, 2)->nullable();
            $table->unsignedInteger('duracao_minutos')->default(60);
            $table->string('imagem')->nullable();
            $table->text('cuidados')->nullable();
            $table->text('contraindicacoes')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('procedimentos');
    }
};