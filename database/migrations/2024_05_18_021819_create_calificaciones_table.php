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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('puntuacion');
            $table->text('comentario');
            $table->date('fecha_calificacion');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
