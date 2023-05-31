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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cancha_id');
            $table->unsignedBigInteger('reserva_id');
            $table->boolean('arbitro')->default(false);
            $table->enum('estado', ['Pendiente', 'Aceptado', 'Denegado'])->default('Pendiente');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cancha_id')->references('id')->on('canchas');
            $table->foreign('reserva_id')->references('id')->on('reservas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
