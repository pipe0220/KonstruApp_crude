<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
     // Relación con el modelo Compra (Un DetalleCompra pertenece a una Compra)
    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    // Relación con el modelo Producto (Un DetalleCompra pertenece a un Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
