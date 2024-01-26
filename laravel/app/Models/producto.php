<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [ // Define los campos que pueden ser asignados en masa
        'id',
        'nombre',
        'descripcion',
        'foto'
        // Agrega más campos si es necesario
    ];
}
