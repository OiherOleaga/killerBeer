<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Formato;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\User;
use App\Models\formato_producto;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    private $dominio= 'http://killerbeer.blog:8000/fotosProducto/';
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

        User::create([
            'name' => 'David',
            'password' => '$2y$12$bUzTHAMP.dnv/XFLgxprIuLFTG970eqszUdwlMIsY0vHXNCUdDyT2', //12345678
            'email' => 'david.moreno@ikasle.egibide.org',
            'rol' => 'responsable'
        ]);

        User::create([
            'name' => 'Oiher',
            'password' => '$2y$12$bUzTHAMP.dnv/XFLgxprIuLFTG970eqszUdwlMIsY0vHXNCUdDyT2', //12345678
            'email' => 'oiher.oleaga@ikasle.egibide.org',
            'rol' => 'responsable'
        ]);

        User::create([
            'name' => 'Anartz',
            'password' => '$2y$12$bUzTHAMP.dnv/XFLgxprIuLFTG970eqszUdwlMIsY0vHXNCUdDyT2', //12345678
            'email' => 'anartz.pagaldai@ikasle.egibide.org',
            'rol' => 'responsable'
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '123456789',
            'nombre' => 'David',
            'codigo' => 'davidmoreno',
            'estado' => 'aceptado',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Coronela Ibaibarriaga',
            'telefono' => '123456789',
            'nombre' => 'Fernando Alonso',
            'codigo' => '333333333',
            'estado' => 'en cola',
        ]);

        Cliente::create([
            'correo' => 'david.moreno@ikasle.egibide.org',
            'direccion' => 'Andorra La Vella',
            'telefono' => '123456789',
            'nombre' => 'Di Grefg',
            'codigo' => '111111111',
            'estado' => 'en cola',
        ]);

        Producto::create([
            'nombre' => 'Killer 0’0%',
            'descripcion' => 'Killer 0’0% es una cerveza sin alcohol que desafía las expectativas y redefine el sabor de la autenticidad.',
            'id_categoria' => '1',
            'foto' => $this->dominio . 'Killer_00.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Clásica',
            'descripcion' => 'Killer Cásica personifica la esencia atemporal de la cerveza tradicional, honrando la rica herencia cervecera con cada gota.',
            'id_categoria' => '2',
            'foto' => $this->dominio . 'KillerCásica.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Tostada',
            'descripcion' => 'Killer Tostada personifica la intensidad y la profundidad de la experiencia cervecera, llevando el paladar a nuevas alturas de deleite y satisfacción.',
            'id_categoria' => '2',
            'foto' => $this->dominio . 'KillerTostada.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Tostada 0’0%',
            'descripcion' => 'Killer Tostada 0’0% es la epítome de la satisfacción sin compromisos, ofreciendo una experiencia cervecera robusta y gratificante sin el contenido alcohólico.',
            'id_categoria' => '1',
            'foto' => $this->dominio . 'Killer_Tostada_0_0.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer Premium',
            'descripcion' => 'Killer Premium personifica la excelencia en cada detalle, elevando la experiencia cervecera a nuevas alturas de refinamiento y sofisticación.',
            'id_categoria' => '2',
            'foto' => $this->dominio . 'KillerPremium.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer con Limón',
            'descripcion' => 'Killer con Limón es una explosión de frescura y vitalidad en cada sorbo, fusionando la intensidad de una cerveza premium con la vivacidad cítrica del limón.',
            'id_categoria' => '3',
            'foto' => $this->dominio . 'KillerconLimón.jpg'
        ]);

        Producto::create([
            'nombre' => 'Killer con Limón 0’0%',
            'descripcion' => 'Killer con Limón 0’0% es la opción refrescante y vibrante para aquellos que buscan una experiencia sin alcohol llena de sabor y vitalidad.',
            'id_categoria' => '4',
            'foto' => $this->dominio . 'KillerconLimón_0_0.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna',
            'descripcion' => 'Killer Magna es la culminación de la maestría cervecera, una obra maestra que encarna la grandeza y la excelencia en cada sorbo.',
            'id_categoria' => '2',
            'foto' => $this->dominio . 'KillerMagna.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna Limón',
            'descripcion' => 'Killer Magna Limón es una fusión audaz de sofisticación y frescura que despierta los sentidos con su vibrante combinación de sabores.',
            'id_categoria' => '3',
            'foto' => $this->dominio . 'KillerMagnaLimón.jpg'
        ]);
        Producto::create([
            'nombre' => 'Killer Magna sin alcohol',
            'descripcion' => 'Killer Magna Sin Alcohol es la expresión de la grandeza cervecera sin concesiones, una reinterpretación magistral de la cerveza premium que preserva todo su sabor y carácter sin el contenido alcohólico.',
            'id_categoria' => '2',
            'foto' => $this->dominio . 'KillerMagnasinalcohol.jpg'
        ]);
        Producto::create([
            'nombre' => 'Agua Pura Killer',
            'descripcion' => 'Agua Pura Killer es la manifestación de la pureza y la frescura en su forma más elemental.',
            'id_categoria' => '5',
            'foto' => $this->dominio . 'Agua_Pura_KillerBeer.jpg'
        ]);
        Producto::create([
            'nombre' => 'Agua Basic',
            'descripcion' => 'Agua Basic es la esencia misma de la hidratación simple y pura.',
            'id_categoria' => '5',
            'foto' => $this->dominio . 'aguabasicKillerBeer.jpg'
        ]);

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
