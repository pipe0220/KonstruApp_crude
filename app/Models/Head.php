<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;

    public function person(){
        return $this->belongsTo(Person::class,'people_id');
    }
    public function bodies(){
        return $this->hasMany(Body::class,'heads_id');
    }
}
