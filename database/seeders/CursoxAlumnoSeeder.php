<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoxAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cursoxalumno = new \App\Models\CursoxAlumno();
        $cursoxalumno->curso_id = 1;
        $cursoxalumno->alumno_id = 1;
        $cursoxalumno->maestro_id = 1;
        $cursoxalumno->horario = '08:00-10:00';
        $cursoxalumno->fecha_inscripcion = now();
        $cursoxalumno->horas_cursadas = 0;
        $cursoxalumno->estado = 'inscrito';
        $cursoxalumno->save();
    }
}
