<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    // Relación con el modelo Cliente (Un Calificacion pertenece a un Cliente)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación con el modelo Producto (Un Calificacion pertenece a un Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

