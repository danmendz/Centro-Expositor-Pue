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
        Schema::create('salones', function (Blueprint $table) {
            $table->bigIncrements('id'); // Cambiado de bigIncrements
            $table->string('nombre', 30)->unique();
            $table->integer('capacidad');
            $table->decimal('precio', 10, 2);
            $table->decimal('tamano', 10, 3);
            $table->string('direccion', 40);
            $table->enum('estatus', ['ocupado', 'disponible', 'remodelacion'])->default('disponible');
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
        Schema::dropIfExists('salones');
    }
};
