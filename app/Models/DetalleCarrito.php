<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCarrito extends Model
{
    use HasFactory;
    
    // Relación con el modelo Carrito (Un DetalleCarrito pertenece a un Carrito)
    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    // Relación con el modelo Producto (Un DetalleCarrito pertenece a un Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
