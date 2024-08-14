<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('Name');
            $table->string('CPF');
            $table->string('Rg');
            $table->string('Sexo');
            $table->string('Endereço');
            $table->string('Mãe');
            $table->string('Pai');
            $table->string('CEP E N°');
            $table->string('Cidade');
            $table->string('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
