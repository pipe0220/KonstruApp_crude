<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function metodoPago()
    {
        return $this->belongsTo(Metodo_Pago::class);
    }

    public function estadoPedido()
    {
        return $this->belongsTo(Estado_Pedido::class);
    }

    public function detallePedido()
    {
        return $this->hasMany(Detalle_Pedido::class);
    }
}
