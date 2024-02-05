<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cliente;

class Clientes extends Seeder
{
    public function run(): void{
        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '123456789',
            'nombre' => 'David',
            'codigo' => '123456789',
            'estado' => 'aceptado',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '123456789',
            'nombre' => 'Fernando Alonso',
            'codigo' => '123456789',
            'estado' => 'en cola',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '123456789',
            'nombre' => 'Di Grefg',
            'codigo' => '123456789',
            'estado' => 'en cola',
        ]);

    }
}
