<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

       // Relación con el modelo Ciudad (Un Cliente pertenece a una Ciudad)
    public function ciudadEnvio()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_envio_id');
    }

    // Relación con el modelo Carrito (Un Cliente tiene muchos Carritos)
    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    // Relación con el modelo Calificacion (Un Cliente tiene muchas Calificaciones)
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }

    // Relación con el modelo Pedido (Un Cliente tiene muchos Pedidos)
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

}
