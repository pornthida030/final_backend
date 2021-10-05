<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function user_coupons(){
        return $this->hasMany(UserCoupon::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
