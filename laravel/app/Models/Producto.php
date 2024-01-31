<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'id',
        'nombre',
        'id_categoria',
        'descripcion',
        'foto'
    ];

    public function formatos()
    {
        return $this->hasMany(formato_producto::class, 'id_productos');
    }
}
