<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class,'companies_id');
    }
    public function city(){
        return $this->belongsTo(City::class, 'cities_id');
    }
    public function inventories(){
        return $this->hasMany(Inventory::class,'stores_id');
    }
}
