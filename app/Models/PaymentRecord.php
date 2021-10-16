<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

//    public function coupon() {
//        return $this->belongsTo(Coupon::class);
//    }
//
//    public function service() {
//        return $this->belongsTo(Service::class);
//    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y');
    }
}
