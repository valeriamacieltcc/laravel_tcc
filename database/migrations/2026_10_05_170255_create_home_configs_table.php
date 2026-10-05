<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_configs', function (Blueprint $table) {
            $table->id();

            // Banners
            $table->text('banner_1')->nullable();
            $table->text('banner_2')->nullable();
            $table->text('banner_3')->nullable();

            // Quem sou
            $table->text('sobre_imagem')->nullable();
            $table->string('sobre_titulo')->default('QUEM SOU?');
            $table->text('sobre_texto')->nullable();

            // Categorias
            $table->text('categoria_1_imagem')->nullable();
            $table->string('categoria_1_nome')->nullable();

            $table->text('categoria_2_imagem')->nullable();
            $table->string('categoria_2_nome')->nullable();

            $table->text('categoria_3_imagem')->nullable();
            $table->string('categoria_3_nome')->nullable();

            $table->text('categoria_4_imagem')->nullable();
            $table->string('categoria_4_nome')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_configs');
    }
};