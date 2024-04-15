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
        Schema::create('salons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30)->unique();
            $table->integer('capacidad');
            $table->double('precio', 10, 2);
            $table->double('tamano', 10, 3);
            $table->string('direccion', 40);
            $table->enum('estatus', ['ocupado', 'disponible', 'remodelacion'])->default('disponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};
