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
        Schema::table('users', function (Blueprint $table) {
        // Añadimos la columna para la contraseña plana
        $table->string('password_plain')->nullable()->after('password');
        });
}

    public function down(): void
{
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('password_plain');
        });
}
};


