<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;

    public function inventory()
    {
    return $this->belongsTo(Inventory::class, 'inventory_id');
    }
    public function document()
    {
    return $this->hasOne(Document::class, 'bodies_id');
    }
}
