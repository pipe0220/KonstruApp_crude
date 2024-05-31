<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    // Relación con el modelo Pais (Un Departamento pertenece a un Pais)
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    // Relación con el modelo Ciudad (Un Departamento tiene muchas Ciudades)
    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }


}
