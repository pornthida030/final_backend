<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;



    public function user_coupons(){
        return $this->hasMany(UserCoupon::class);
    }

    public function coupons(){
        return $this->hasMany(Coupon::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class)->latest()->take(3);
    }
}
