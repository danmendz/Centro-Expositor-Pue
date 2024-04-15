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
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30);
            $table->integer('capacidad');
            $table->unsignedBigInteger('id_evento')->nullable();
            $table->unsignedBigInteger('id_salon')->nullable();
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->foreign('id_salon')->references('id')->on('salons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
