<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    public function type(){
        return $this->belongsToMany(Type::class);
    }

    
    use HasFactory;
}
