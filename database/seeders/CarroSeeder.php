<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carro = new \App\Models\Carro();
        $carro->marca = 'Toyota';
        $carro->modelo = 'Corolla';
        $carro->anio = 2021;
        $carro->placa = 'P-123ABC';
        $carro->color = 'Rojo';
        $carro->kilometraje = 0;
        $carro->save();
    }
}
