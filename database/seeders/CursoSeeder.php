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
    }
}
