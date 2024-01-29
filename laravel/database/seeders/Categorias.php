<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;


class Categorias extends Seeder
{
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Cerveza sin alcohol',
        ]);
        Categoria::create([
            'nombre' => 'Cerveza',
        ]);
        Categoria::create([
            'nombre' => 'Radler',
        ]);
        Categoria::create([
            'nombre' => 'Radler sin alcohol',
        ]);
        Categoria::create([
            'nombre' => 'Agua',
        ]);
    }
}
