<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id'); // Cambiado de id()
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
            $table->unsignedBigInteger('id_usuario'); // Agregado el campo id_persona
            $table->unsignedBigInteger('id_salon'); // Agregado el campo id_salon
            $table->foreign('id_usuario')->references('id')->on('users'); // Corregido el nombre de la tabla de usuarios
            $table->foreign('id_salon')->references('id')->on('salones'); // Definida la llave foránea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
