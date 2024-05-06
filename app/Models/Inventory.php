<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

        public function motion()
    {
        return $this->belongsTo(Motion::class, 'motions_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'stores_id');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'people_id');
    }

    public function bodies()
    {
        return $this->hasMany(Body::class, 'inventory_id');
    }
}
