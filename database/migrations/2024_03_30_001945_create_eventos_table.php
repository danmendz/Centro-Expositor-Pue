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
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30);
            $table->enum('tipo', ['social', 'deportivo', 'cultural', 'convencion', 'academico', 'religioso', 'politico'])->default('social');
            $table->integer('asistentes');
            $table->enum('acceso', ['publico', 'privado'])->default('publico');
            $table->string('comentarios', 30)->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->enum('estatus', ['finalizado', 'cancelado', 'iniciado', 'reservado', 'aprobado'])->default('reservado');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_salon');
            $table->foreign('id_usuario')->references('id')->on('users'); // Corregido el nombre de la tabla de usuarios
            $table->foreign('id_salon')->references('id')->on('salons'); // Definida la llave foránea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
