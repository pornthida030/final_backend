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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User Controller
Route::middleware(['jwt.auth'])->prefix('user')->group(function() {
    Route::get('/me',[App\Http\Controllers\UserController::class, 'getMe']);
    Route::get('/',[App\Http\Controllers\UserController::class, 'getAllUsers']);
    Route::get('/{id}',[App\Http\Controllers\UserController::class, 'getUser']);
    Route::put('/me',[App\Http\Controllers\UserController::class, 'updateMe']);
    Route::put('/{id}',[App\Http\Controllers\UserController::class, 'updateUser']);
    Route::delete('/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
});

// Authentication Controller
Route::prefix('auth')->group(function() {
    Route::post('/login',[App\Http\Controllers\UserController::class, 'login']);
    Route::post('/register',[App\Http\Controllers\UserController::class, 'register']);
});

// Type Controller
Route::prefix('type')->group(function() {
    Route::get('/',[App\Http\Controllers\TypeController::class, 'getAllTypes']);
    Route::post('/',[App\Http\Controllers\TypeController::class, 'createType']);
    Route::get('/{id}',[App\Http\Controllers\TypeController::class, 'getTypeAndService']);
    Route::put('/{id}',[App\Http\Controllers\TypeController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\TypeController::class, 'destroy']);
});

// Coupon Controller
Route::prefix('coupon')->group(function(){
    Route::post('/', [App\Http\Controllers\CouponController::class, 'createCoupon']);
    Route::put('/{id}',[App\Http\Controllers\CouponController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\CouponController::class, 'destroy']);
});

// UserCoupon Controller
Route::prefix('user_coupon')->group(function(){
    Route::get('/', [\App\Http\Controllers\UserCouponController::class, 'getUserCoupon']);
    Route::post('/', [App\Http\Controllers\UserCouponController::class, 'addUserCoupon']);
    Route::put('/',[App\Http\Controllers\UserCouponController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\UserCouponController::class, 'destroy']);
});

// Service Controller
Route::prefix('service')->group(function() {
    Route::get('/',[App\Http\Controllers\ServiceController::class, 'getAllServices']);
    Route::get('/{id}',[App\Http\Controllers\ServiceController::class, 'getServiceAndCoupons']);
    Route::post('/',[App\Http\Controllers\ServiceController::class, 'createService']);
    Route::put('/{id}',[App\Http\Controllers\ServiceController::class, 'update']);
    Route::delete('/{id}',[App\Http\Controllers\ServiceController::class, 'destroy']);
});