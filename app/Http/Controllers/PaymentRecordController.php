<?php

namespace App\Http\Controllers;

use App\Models\PaymentRecord;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentRecordController extends Controller
{
    public function getPaymentRecords() {
        $payment_records = PaymentRecord::all();
        foreach ($payment_records as $payment) {
//            $payment['service'] = $payment->service;
            $payment['coupon'] = $payment->coupon;
            $payment['user'] = $payment->user;

        }
        return $payment_records;
    }
}
