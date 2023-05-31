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
        Schema::create('arbitros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_1');
            $table->string('apellido_2');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('experiencia')->nullable();
            $table->enum('disponibilidad', ['Total', 'Tardes', 'Fines de semana', 'Dia exporadico']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arbitros');
    }
};
