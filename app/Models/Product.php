<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_Category(){
        return $this->belongsTo(Product_Category::class,'catproductos_id');
    }

    public function inventories(){
        return $this->hasMany(Inventory::class,'products_id');
    }


}
