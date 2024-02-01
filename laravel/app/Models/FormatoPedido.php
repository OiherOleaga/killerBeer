<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatoPedido extends Model
{
    protected $table = 'formatos_pedidos';
    protected $fillable = ['id_pedido', 'id_formato_producto', 'precio', 'cantidad'];

    use HasFactory;
}
