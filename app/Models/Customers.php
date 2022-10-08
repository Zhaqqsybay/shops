<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    public function orders(){
        return $this->belongsToMany(Orders::class)->using(Items_Orders::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->belongsToMany(Items::class)->using(Korzina::class);
    }

    use HasFactory;
}
