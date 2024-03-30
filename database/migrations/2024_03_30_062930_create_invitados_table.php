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
        Schema::create('invitados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('estatus', ['pendiente','aprobada', 'rechazada'])->default('pendiente');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_evento');
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->foreign('id_area')->references('id')->on('areas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitados');
    }
};
