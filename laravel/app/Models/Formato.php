<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table = "formatos";
    protected $fillable = ['tipo'];
    use HasFactory;
}
