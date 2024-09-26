<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Jose';
        $user->rol = 'maestro';
        $user->email = 'joseociom@outlook.com';
        $user->password = bcrypt('123456');
        $user->email_verified_at = now();
        $user->remember_token = '123456';
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        $user = new User();
        $user->name = 'ilufote';
        $user->rol = 'alumno';
        $user->email = 'ilufote@gmail.com';
        $user->password = bcrypt('123456');
        $user->email_verified_at = now();
        $user->remember_token = '123456';
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
    }
}
