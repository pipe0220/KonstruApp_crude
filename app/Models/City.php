<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function departament(){
        return $this->belongsTo(Departament::class,'departament_id');
    }
    public function stores(){
        return $this->hasMany(Store::class,'cities_id');
    }
}
