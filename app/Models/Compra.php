<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detalleCompra()
    {
        return $this->hasMany(Detalle_Compra::class);
    }
}
