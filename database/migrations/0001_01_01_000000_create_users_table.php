<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabla de Usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('email')->unique();
            $table->string('profesion')->nullable();
            $table->string('password')->default('password'); // Agregamos esto por seguridad
            $table->timestamps();
        });

        // Tabla de Tokens (Necesaria para que Laravel no de error)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
    }
};