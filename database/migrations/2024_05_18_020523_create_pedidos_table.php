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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pedido');
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('estado_pedido_id');
            $table->unsignedBigInteger('metodo_pago_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('estado_pedido_id')->references('id')->on('estado_pedidos');
            $table->foreign('metodo_pago_id')->references('id')->on('metodos_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
