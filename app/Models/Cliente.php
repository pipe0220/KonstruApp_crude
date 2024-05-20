<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
        public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_envio_id');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function carrito()
    {
        return $this->hasOne(Carrito::class);
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }
}
