<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\formato_producto;


class formatos_productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '1',
            'precio' => '0.70'
        ]);
        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '2',
            'precio' => '0.65'
        ]);

        formato_producto::create([
            'id_formatos' => '3',
            'id_productos' => '2',
            'precio' => '0.72'
        ]);

        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '2',
            'precio' => '85.23'
        ]);

        formato_producto::create([
            'id_formatos' => '3',
            'id_productos' => '3',
            'precio' => '0.78'
        ]);

        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '3',
            'precio' => '87.29'
        ]);

        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '4',
            'precio' => '0.80'
        ]);

        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '4',
            'precio' => '92.47'
        ]);

        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '5',
            'precio' => '1.40'
        ]);

        formato_producto::create([
            'id_formatos' => '3',
            'id_productos' => '5',
            'precio' => '1.96'
        ]);

        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '5',
            'precio' => '113.45'
        ]);

        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '6',
            'precio' => '0.96'
        ]);
        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '7',
            'precio' => '1.04'
        ]);
        formato_producto::create([
            'id_formatos' => '3',
            'id_productos' => '8',
            'precio' => '1.12'
        ]);
        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '8',
            'precio' => '94.12'
        ]);

        formato_producto::create([
            'id_formatos' => '3',
            'id_productos' => '9',
            'precio' => '0.99'
        ]);

        formato_producto::create([
            'id_formatos' => '5',
            'id_productos' => '9',
            'precio' => '88.23'
        ]);

        formato_producto::create([
            'id_formatos' => '2',
            'id_productos' => '10',
            'precio' => '1.02'
        ]);

        formato_producto::create([
            'id_formatos' => '1',
            'id_productos' => '11',
            'precio' => '0.95'
        ]);

        formato_producto::create([
            'id_formatos' => '4',
            'id_productos' => '11',
            'precio' => '2.10'
        ]);

        formato_producto::create([
            'id_formatos' => '1',
            'id_productos' => '12',
            'precio' => '0.62'
        ]);

        formato_producto::create([
            'id_formatos' => '4',
            'id_productos' => '12',
            'precio' => '1.80'
        ]);
    }
}
