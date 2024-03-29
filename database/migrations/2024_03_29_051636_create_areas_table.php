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
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30);
            $table->integer('capacidad');
            $table->unsignedBigInteger('id_evento')->nullable();
            $table->unsignedBigInteger('id_salon')->nullable();
            $table->foreign('id_evento')->references('id')->on('eventos'); // Definida la llave foránea
            $table->foreign('id_salon')->references('id')->on('salons'); // Definida la llave foránea
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
        Schema::dropIfExists('areas');
    }
};
