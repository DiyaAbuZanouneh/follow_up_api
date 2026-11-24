<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\CatigoreController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderitemController;
use App\Http\Controllers\Api\SellerController;


Route::apiResource('users', UserController::class);
Route::apiResource('catigores', CatigoreController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('orderitems', OrderitemController::class);
Route::apiResource('sellers', SellerController::class);