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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Esta columna será la clave primaria autoincrement
            $table->string('name', 45);
            $table->integer('price');
            $table->text('description');
            $table->integer('amount');
            $table->string('brand', 45);
            $table->string('model', 45);
            $table->string('measurements', 45);
            $table->string('trade mark', 45);
            $table->unsignedBigInteger('catproductos_id');
            $table->foreign('catproductos_id')->references('id')->on('product__categories');
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
