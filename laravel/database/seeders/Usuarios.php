<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class Usuarios extends Seeder
{
    public function run(): void{
        User::create([
            'name' => 'David',
            'password' => '$2y$12$bUzTHAMP.dnv/XFLgxprIuLFTG970eqszUdwlMIsY0vHXNCUdDyT2', //12345678
            'email' => 'david.moreno@ikasle.egibide.org',
            'rol' => 'comercial'
        ]);
    }
}
