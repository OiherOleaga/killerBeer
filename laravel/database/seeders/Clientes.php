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
            'telefono' => '692484269',
            'nombre' => 'David',
            'codigo' => '123456789',
            'estado' => 'aceptado',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '692484269',
            'nombre' => 'Fernando',
            'codigo' => '123456789',
            'estado' => 'en cola',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '692484269',
            'nombre' => 'Jaime',
            'codigo' => '123456789',
            'estado' => 'en cola',
        ]);

    }
}
