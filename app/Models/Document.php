<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Head::class, 'heads_id');
    }

    public function body()
    {
        return $this->belongsTo(Body::class, 'bodies_id');
    }
}
