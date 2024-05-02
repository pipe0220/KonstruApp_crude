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
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_1');
            $table->string('name_2');
            $table->string('last_name_1');
            $table->string('last_name_2');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('email');
            $table->dateTime('birth_date');
            $table->string('gender');
            $table->string('sex');
            $table->string('departament');
            $table->string('city');
            $table->string('country');
            $table->string('address');
            $table->unsignedInteger('tp_id');
            $table->foreign('tp_id')->references('id')->on('types');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
