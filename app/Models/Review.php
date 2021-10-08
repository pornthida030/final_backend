<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function coupon(){
       return $this->belongsTo(Coupon::class);
    }



    public function service(){
        return $this->belongsTo(Service::class);
    }
}
