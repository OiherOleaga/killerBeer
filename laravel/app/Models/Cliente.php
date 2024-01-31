<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['correo', 'direccion', 'telefono', 'nombre', 'codigo','estado'];
    use HasFactory;
}
