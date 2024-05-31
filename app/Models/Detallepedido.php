<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

   // Relación con el modelo Pedido (Un DetallePedido pertenece a un Pedido)
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    // Relación con el modelo Producto (Un DetallePedido pertenece a un Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
