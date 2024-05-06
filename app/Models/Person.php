<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function inventories(){
        return $this->hasMany(Inventory::class,'people_id');
    }

    public function heads(){
        return $this->hasMany(Head::class,'people_id');
    }
}
