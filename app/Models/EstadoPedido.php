<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
    use HasFactory;

    // Relación con el modelo Pedido (Un EstadoPedido tiene muchos Pedidos)
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
