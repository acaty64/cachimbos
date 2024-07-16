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
        Schema::create('ingresantes', function (Blueprint $table) {
            $table->id();
            $table->string('alumno_nombres', 245) ;
            $table->string('alumno', 11) ;
            $table->string('fac', 4) ;
            $table->string('car', 4) ;
            $table->string('mod', 4) ;
            $table->string('sd', 3) ;
            $table->string('postulante', 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresantes');
    }
};
