<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
     // Relación con el modelo Ciudad (Un Proveedor pertenece a una Ciudad)
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    // Relación con el modelo Compra (Un Proveedor tiene muchas Compras)
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
