<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    // Relación recursiva consigo misma (Una Categoría puede tener una Categoría Padre)
    public function categoriaPadre()
    {
        return $this->belongsTo(Categoria::class, 'categoria_padre');
    }

    // Relación recursiva consigo misma (Una Categoría puede tener muchas Subcategorías)
    public function subcategorias()
    {
        return $this->hasMany(Categoria::class, 'categoria_padre');
    }

    // Relación con el modelo Producto (Una Categoría tiene muchos Productos)
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

}
