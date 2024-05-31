<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    
    // Relación con el modelo Producto (Un Inventario pertenece a un Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
