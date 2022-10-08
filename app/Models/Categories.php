<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function items(){
        return $this->belongsToMany(Items::class)->using(Categories_Items::class);
    }
    use HasFactory;
}
