<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function customers(){
        return $this->belongsToMany(Customers::class)->using(Customers_Orders::class);
    }

    public function items(){
        return $this->belongsToMany(Items::class)->using(Items_Orders::class);
    }
    use HasFactory;
}
