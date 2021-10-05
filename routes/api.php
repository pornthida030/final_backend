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

// test
// Route::post('user/login',[App\Http\Controllers\UserController::class, 'index']);
Route::post('user/register',[App\Http\Controllers\UserController::class, 'register']);

// Type Controller
Route::get('/type',[App\Http\Controllers\TypeController::class, 'getAllTypes']);
Route::post('/type',[App\Http\Controllers\TypeController::class, 'createType']);

Route::get('/type/{id}',[App\Http\Controllers\TypeController::class, 'getTypeAndService']);
Route::put('/type/{id}',[App\Http\Controllers\TypeController::class, 'update']);
Route::delete('/type/{id}',[App\Http\Controllers\TypeController::class, 'destroy']);