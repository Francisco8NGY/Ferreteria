<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedores extends Model
{
    protected $fillable = [
        'name', 'telefono', 'direccion', 'codigoPostal', 'email', 
    ];

}
