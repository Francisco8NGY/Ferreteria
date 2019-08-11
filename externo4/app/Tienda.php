<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
        'name', 'telefono', 'direccion', 'codigoPostal',
    ];
  
}
