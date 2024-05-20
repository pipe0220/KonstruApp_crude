<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalleCarrito()
    {
        return $this->hasMany(Detalle_Carritos::class);
    }
}
