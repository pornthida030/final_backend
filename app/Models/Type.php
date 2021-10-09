<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function services(){
        return $this->hasMany(Service::class);
    }
    
    public function coupons(){
        return $this->hasMany(Coupon::class);
    }
}
