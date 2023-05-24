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
        Schema::create('canchas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('localidad');
            $table->string('direccion');
            $table->double('precio');
            $table->string('foto')->nullable();
            $table->enum('disponibilidad', ['Turno tarde ', 'En reformas', 'Fines de semana', 'Todos los dias']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canchas');
    }
};
