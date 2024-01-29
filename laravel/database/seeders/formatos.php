<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Formato;

class formatos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formato::create([
            'tipo' => '20cl',
        ]);
        Formato::create([
            'tipo' => '25cl',
        ]);

        Formato::create([
            'tipo' => '33cl',
        ]);
        Formato::create([
            'tipo' => '1L',
        ]);
        Formato::create([
            'tipo' => 'barril',
        ]);
    }
}
