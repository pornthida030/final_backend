<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function coupons(){
        return $this->hasMany(Coupon::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
