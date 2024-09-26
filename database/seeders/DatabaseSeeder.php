<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\CursoxAlumno;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CarroSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MaestroSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(CursoxAlumnoSeeder::class);
    }
}
