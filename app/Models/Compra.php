<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
     // Relación con el modelo Proveedor (Una Compra pertenece a un Proveedor)
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    // Relación con el modelo DetalleCompra (Una Compra tiene muchos DetalleCompra)
    public function detalleCompras()
    {
        return $this->hasMany(DetalleCompra::class);
    }

}
