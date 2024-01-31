<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Clientes::class);
        $this->call(Categorias::class);
        $this->call(Productos::class);
        $this->call(Formatos::class);
        $this->call(formatos_productos::class);
        $this->call(Usuarios::class);
    }
}
