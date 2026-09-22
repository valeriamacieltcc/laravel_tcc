<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('favoritos', function (Blueprint $table) {

            $table->foreignId('vitrine_id')
                ->nullable()
                ->after('procedimento_id')
                ->constrained('vitrine')
                ->cascadeOnDelete();

        });
    }

    public function down(): void
    {
        Schema::table('favoritos', function (Blueprint $table) {

            $table->dropForeign(['vitrine_id']);

            $table->dropColumn('vitrine_id');

        });
    }
};