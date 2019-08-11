<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'marca', 'modelo', 'categoria', 'maximoProducto','minimoProducto','existencia','costo','precioPublico','fecha','imagen','tienda_id','provedor_id', 
    ];

    public function scopeProducto($query,$nombre){
        if($nombre)
            return $query->where('nombre','LIKE',"%$nombre%");
    }
}
