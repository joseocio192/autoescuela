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
        Schema::create('cursox_alumnos', function (Blueprint $table) {
            $table->foreignId('curso_id')->references('id')->on('cursos');
            $table->foreignId('alumno_id')->references('id')->on('alumnos');
            $table->primary(['curso_id', 'alumno_id']);
            $table->foreignId('maestro_id')->references('id')->on('maestros');
            $table->date('fecha_inscripcion');
            $table->integer('horas_cursadas');
            $table->enum('estado', ['inscrito', 'cursando', 'terminado', 'cancelado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursox_alumnos');
    }
};
