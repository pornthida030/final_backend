<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authentication Controller
Route::prefix('auth')->group(function() {
    Route::post('/login',[App\Http\Controllers\UserController::class, 'login']);
    Route::post('/register',[App\Http\Controllers\UserController::class, 'register']);
});

// User Controller
Route::middleware(['jwt.auth:ADMIN,USER'])->prefix('user')->group(function() {
    Route::get('/me',[App\Http\Controllers\UserController::class, 'getMe']);
    Route::put('/me',[App\Http\Controllers\UserController::class, 'updateMe']);
});

// User Controller for Admin
Route::middleware(['jwt.auth:ADMIN'])->prefix('user')->group(function() {
    Route::get('/',[App\Http\Controllers\UserController::class, 'getAllUsers']);
    Route::get('/{id}',[App\Http\Controllers\UserController::class, 'getUser']);
    Route::post('/',[App\Http\Controllers\UserController::class, 'addUser']);
    Route::put('/{id}',[App\Http\Controllers\UserController::class, 'updateUser']);
    Route::delete('/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
});


// Type Controller for Admin
Route::middleware(['jwt.auth:ADMIN'])->prefix('type')->group(function() {
    Route::post('/',[App\Http\Controllers\TypeController::class, 'createType']);
    Route::put('/{id}',[App\Http\Controllers\TypeController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\TypeController::class, 'destroy']);
});

// Type Controller
Route::prefix('type')->group(function() {
    Route::get('/',[App\Http\Controllers\TypeController::class, 'getAllTypes']);
    Route::get('/{id}',[App\Http\Controllers\TypeController::class, 'getTypeAndService']);
});

// Coupon Controller for Admin
Route::middleware(['jwt.auth:ADMIN'])->prefix('coupon')->group(function(){
    Route::post('/', [App\Http\Controllers\CouponController::class, 'createCoupon']);
    Route::put('/{id}',[App\Http\Controllers\CouponController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\CouponController::class, 'destroy']);
});

// Coupon Controller
Route::prefix('coupon')->group(function(){
    Route::get('/random', [App\Http\Controllers\CouponController::class, 'random']);

});

// UserCoupon Controller
Route::middleware(['jwt.auth:ADMIN,USER,EMPLOYEE'])->prefix('user_coupon')->group(function(){
    Route::get('/', [\App\Http\Controllers\UserCouponController::class, 'getUserCoupon']);
    Route::post('/', [App\Http\Controllers\UserCouponController::class, 'addUserCoupon']);
});

// UserCoupon Controller for Admin
Route::middleware(['jwt.auth:ADMIN,EMPLOYEE'])->prefix('user_coupon')->group(function(){
    Route::put('/{id}',[App\Http\Controllers\UserCouponController::class, 'updateCouponStatus']);
    Route::delete('/{id}',[App\Http\Controllers\UserCouponController::class, 'destroy']);
});

// Service Controller
Route::prefix('service')->group(function() {
    Route::get('/',[App\Http\Controllers\ServiceController::class, 'getAllServices']);
    Route::get('/{id}',[App\Http\Controllers\ServiceController::class, 'getServiceAndCoupons']);
});

// Service Controller for Admin
Route::middleware(['jwt.auth:ADMIN'])->prefix('service')->group(function() {
    Route::post('/',[App\Http\Controllers\ServiceController::class, 'createService']);
    Route::put('/{id}',[App\Http\Controllers\ServiceController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\ServiceController::class, 'destroy']);
});

// Review Controller
Route::middleware(['jwt.auth:ADMIN,USER'])->prefix('review')->group(function(){
    Route::post('/',[App\Http\Controllers\ReviewController::class,'createReview']);
});

// Employee Controller for Admin
Route::middleware(['jwt.auth:ADMIN'])->prefix('employee')->group(function(){
    Route::post('/',[App\Http\Controllers\EmployeeController::class, 'AddEmployeeToType']);
    Route::delete('/{id}',[App\Http\Controllers\EmployeeController::class, 'RemoveEmployeeFromType']);
    Route::get('/',[App\Http\Controllers\ReviewController::class,'getAllReview']);
    Route::get('/random', [App\Http\Controllers\ReviewController::class, 'random']);
});

Route::middleware(['jwt.auth:ADMIN'])->prefix('discount_coupon')->group(function() {
    Route::post('/',[App\Http\Controllers\DiscountCouponController::class, 'create']);
    Route::put('/{id}',[App\Http\Controllers\DiscountCouponController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\DiscountCouponController::class, 'destory']);
    Route::get('/',[App\Http\Controllers\DiscountCouponController::class, 'getAll']);
});

Route::middleware(['jwt.auth:ADMIN,USER'])->prefix('discount_coupon')->group(function() {
    Route::get('/{discount}',[App\Http\Controllers\DiscountCouponController::class, 'checkDiscountCoupon']);
});

Route::middleware(['jwt.auth:USER'])->prefix('payment_record')->group(function(){
    Route::get('/',[App\Http\Controllers\PaymentRecordController::class,'getPaymentRecords']);
    Route::post('/',[App\Http\Controllers\PaymentRecordController::class, 'makeTransaction']);
});
