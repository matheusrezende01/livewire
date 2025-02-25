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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->nullable(false);
            $table->string('email',100)->nullable(false);
            $table->string('telefone', 80)->nullable(false);
            $table->string('estado_civil', 80)->nullable(false);
            $table->dateTime('data_nascimento',6)->nullable(false);
            $table->string('cidade', 80)->nullable(false);
            $table->string('estado', 80)->nullable(false);
            $table->string('endereco', 80)->nullable(false);
            $table->string('cep', 50)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
