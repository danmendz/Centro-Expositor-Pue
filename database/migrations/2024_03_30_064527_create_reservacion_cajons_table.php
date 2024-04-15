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
        Schema::create('reservacion_cajons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('inicio');
            $table->time('fin');
            $table->integer('estatus');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cajon');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_cajon')->references('id')->on('cajons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservacion_cajons');
    }
};
