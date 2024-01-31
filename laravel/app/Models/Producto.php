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
        return $this->belongsToMany(Formato::class, 'formatos_productos', 'id_productos', 'id_formatos');
    }
}
