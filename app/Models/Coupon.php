<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongTo(Type::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function user_coupons(){
        return $this->hasMany(UserCoupon::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function payment_record() {
        return $this->hasMany(PaymentRecord::class);
    }
}
