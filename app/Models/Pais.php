<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

     // Relación con el modelo Departamento (Un Pais tiene muchos Departamentos)
    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }

}

