<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [ // Define los campos que pueden ser asignados en masa
        'id',
        'nombre',
        'id_categoria',
        'descripcion',
        'foto'
        // Agrega más campos si es necesario
    ];
}
