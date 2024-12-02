<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->nombre = 'Basico';
        $curso->descripcion = 'Curso basico de manejo donde se enseñan las reglas de transito';
        $curso->horas = 7;
        $curso->costo = 1500;
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Motocicleta';
        $curso->descripcion = 'Curso basico de manejo de motocicleta donde se enseñan las reglas de transito';
        $curso->horas = 7;
        $curso->costo = 1500;
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Intermedio';
        $curso->descripcion = 'Curso intermedio de manejo donde se enseñan las reglas de transito y se practica en la calle';
        $curso->horas = 14;
        $curso->costo = 2500;
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Avanzado';
        $curso->descripcion = 'Curso avanzado de manejo donde se enseñan las reglas de transito y se practa en la calle y en la carretera';
        $curso->horas = 21;
        $curso->costo = 3500;
        $curso->save();

        $curso = new Curso();
        $curso->nombre = 'Profesional';
        $curso->descripcion = 'Curso profesional de manejo donde se enseñan las reglas de transito y se practica en la calle, carretera y en la pista';
        $curso->horas = 28;
        $curso->costo = 4500;
        $curso->save();

        $curso = new Curso();

    }
}
