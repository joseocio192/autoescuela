<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Carro;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maestro = new \App\Models\Maestro();
        $maestro->user_id = 1;
        $maestro->carro_id = 1;
        $maestro->save();
}
}
