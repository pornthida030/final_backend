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

    public function employees($type_id){
        return $this->hasMany(Employee::class)->where('type_id',$type_id);
    }
}
