<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

     // Relación con el modelo Departamento (Una Ciudad pertenece a un Departamento)
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    // Relación con el modelo Cliente (Una Ciudad puede tener muchos Clientes)
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'ciudad_envio_id');
    }

    // Relación con el modelo Proveedor (Una Ciudad puede tener muchos Proveedores)
    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }


}
