<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "pedidos";
    protected $fillable = ['id_cliente', 'estado', 'fecha_entrega', 'precio'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

}
