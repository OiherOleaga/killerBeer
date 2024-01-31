<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Producto;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Killer 0’0%',
            'descripcion' => 'Killer 0’0% es una cerveza sin alcohol que desafía las expectativas y redefine el sabor de la autenticidad.',
            'id_categoria' => '1',
            'foto' => "{{ asset('jalknardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png') }}"
        ]);

        Producto::create([
            'nombre' => 'Killer Cásica',
            'descripcion' => 'Killer Cásica personifica la esencia atemporal de la cerveza tradicional, honrando la rica herencia cervecera con cada gota.',
            'id_categoria' => '2',
            'foto' => '/src/components/img/beers/KillerCásica.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Tostada',
            'descripcion' => 'Killer Tostada personifica la intensidad y la profundidad de la experiencia cervecera, llevando el paladar a nuevas alturas de deleite y satisfacción.',
            'id_categoria' => '2',
            'foto' => '/src/components/img/beers/KillerTostada.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Tostada 0’0%',
            'descripcion' => 'Killer Tostada 0’0% es la epítome de la satisfacción sin compromisos, ofreciendo una experiencia cervecera robusta y gratificante sin el contenido alcohólico.',
            'id_categoria' => '1',
            'foto' => '/src/components/img/beers/Killer_Tostada_0_0.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Premium',
            'descripcion' => 'Killer Premium personifica la excelencia en cada detalle, elevando la experiencia cervecera a nuevas alturas de refinamiento y sofisticación.',
            'id_categoria' => '2',
            'foto' => '/src/components/img/beers/KillerPremium.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer con Limón',
            'descripcion' => 'Killer con Limón es una explosión de frescura y vitalidad en cada sorbo, fusionando la intensidad de una cerveza premium con la vivacidad cítrica del limón.',
            'id_categoria' => '3',
            'foto' => '/src/components/img/beers/KillerconLimón.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer con Limón 0’0%',
            'descripcion' => 'Killer con Limón 0’0% es la opción refrescante y vibrante para aquellos que buscan una experiencia sin alcohol llena de sabor y vitalidad.',
            'id_categoria' => '4',
            'foto' => '/src/components/img/beers/KillerconLimón_0_0.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna',
            'descripcion' => 'Killer Magna es la culminación de la maestría cervecera, una obra maestra que encarna la grandeza y la excelencia en cada sorbo.',
            'id_categoria' => '2',
            'foto' => '/src/components/img/beers/KillerMagna.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna Limón',
            'descripcion' => 'Killer Magna Limón es una fusión audaz de sofisticación y frescura que despierta los sentidos con su vibrante combinación de sabores.',
            'id_categoria' => '3',
            'foto' => '/src/components/img/beers/KillerMagnaLimón.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna sin alcohol',
            'descripcion' => 'Killer Magna Sin Alcohol es la expresión de la grandeza cervecera sin concesiones, una reinterpretación magistral de la cerveza premium que preserva todo su sabor y carácter sin el contenido alcohólico.',
            'id_categoria' => '2',
            'foto' => '/src/components/img/beers/KillerMagnasinalcohol.jpg'
        ]);
        Producto::create([
            'nombre' => 'Agua Pura Killer',
            'descripcion' => 'Agua Pura Killer es la manifestación de la pureza y la frescura en su forma más elemental.',
            'id_categoria' => '5',
            'foto' => '/src/components/img/beers/Agua_Pura_KillerBeer.jpg'
        ]);
        Producto::create([
            'nombre' => 'Agua Basic',
            'descripcion' => 'Agua Basic es la esencia misma de la hidratación simple y pura.',
            'id_categoria' => '5',
            'foto' => '/src/components/img/beers/aguabasicKillerBeer.jpg'
        ]);
    }
}
