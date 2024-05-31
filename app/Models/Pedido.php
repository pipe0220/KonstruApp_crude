<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    // Relación con el modelo Cliente (Un Pedido pertenece a un Cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación con el modelo EstadoPedido (Un Pedido pertenece a un EstadoPedido)
    public function estadoPedido()
    {
        return $this->belongsTo(EstadoPedido::class);
    }

    // Relación con el modelo MetodoPago (Un Pedido pertenece a un MetodoPago)
    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class);
    }

    // Relación con el modelo DetallePedido (Un Pedido tiene muchos DetallePedido)
    public function detallePedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }

}
