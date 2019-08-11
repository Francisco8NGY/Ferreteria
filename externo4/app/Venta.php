<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'SubTotal', 'iva', 'total', 'tipoPago', 'estado', 'fecha', 'user_id',
    ];
}
