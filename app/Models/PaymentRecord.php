<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    use HasFactory;

    public function user() {
        $this->belongsTo(User::class);
    }

    public function coupon() {
        $this->belongsTo(Coupon::class);
    }
}
