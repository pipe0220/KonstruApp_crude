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
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('initial_quantity', 45);
            $table->string('final_quantity', 45);
            $table->string('current_quantity', 45);
            $table->string('lot', 45);
            $table->string('purchase_price', 45);
            $table->string('selling_price', 45);
            $table->string('profit_percentage', 45);
            $table->string('preparation_date');
            $table->string('expiration_date', 45);
            $table->unsignedInteger('motions_id');
            $table->unsignedInteger('stores_id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('people_id');
            $table->foreign('motions_id')->references('id')->on('motions');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('stores_id')->references('id')->on('stores');
            $table->foreign('people_id')->references('id')->on('people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invenroties');
    }
};
