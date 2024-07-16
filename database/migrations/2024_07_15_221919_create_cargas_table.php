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
        Schema::create('cargas', function (Blueprint $table) {
            $table->id();
            $table->string('sd', 4);
            $table->string('fac', 4);
            $table->string('car', 4);
            $table->string('nombre_cur', 150);
            $table->integer('capacidad');
            $table->integer('inscritos');
            $table->string('curso', 6);
            $table->string('actividad', 2);
            $table->string('seccion', 3);
            $table->string('grupo', 1);
            $table->string('horario', 150);
            $table->integer('id_carga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargas');
    }
};
