<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable =[
   'cantidad','total','user_id','venta_id',
    ];
}
