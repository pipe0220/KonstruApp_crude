<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    // Relación con el modelo Cliente (Un Carrito pertenece a un Cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación con el modelo DetalleCarrito (Un Carrito tiene muchos DetalleCarrito)
    public function detalleCarritos()
    {
        return $this->hasMany(DetalleCarrito::class);
    }

}
