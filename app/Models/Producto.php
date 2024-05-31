<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Relación con el modelo Categoria (Un Producto pertenece a una Categoria)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Relación con el modelo Calificacion (Un Producto tiene muchas Calificaciones)
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }

    // Relación con el modelo DetalleCarrito (Un Producto tiene muchos DetalleCarrito)
    public function detalleCarritos()
    {
        return $this->hasMany(DetalleCarrito::class);
    }

    // Relación con el modelo DetalleCompra (Un Producto tiene muchos DetalleCompra)
    public function detalleCompras()
    {
        return $this->hasMany(DetalleCompra::class);
    }

    // Relación con el modelo DetallePedido (Un Producto tiene muchos DetallePedido)
    public function detallePedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }

    // Relación con el modelo Inventario (Un Producto tiene muchos Inventarios)
    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
    }

}
