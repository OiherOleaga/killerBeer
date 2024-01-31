<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formato_producto extends Model
{

    protected $table = 'formatos_productos';
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_productos');
    }
}
