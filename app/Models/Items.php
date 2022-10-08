<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public function customers(){
        return $this->belongsToMany(Customers::class)->using(Korzina::class);

    }

    public function categories(){
        return $this->belongsToMany(Categories::class)->using(Categories_Items::class);
    }

    public function orders(){
        return $this->belongsToMany(Orders::class)->using(Items_Orders::class);
    }

    use HasFactory;
}
