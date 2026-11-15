<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/userCreate', [UserController::class,'create'])->name('createUser');
Route::post('/userStore', [UserController::class,'store'])->name('userStore');
Route::delete('/deleteUser/{id}', [UserController::class,'destroy'])->name('deleteUser');
Route::get('/update/{id}', [UserController::class,'edit'])->name('update');
Route::put('/updateStore/{id}', [UserController::class,'update'])->name('updateStore');

// how to used resource route

Route::resource('order_route', OrderController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware(['auth','role:admin'])->group(
// function(){
//     Route::get('admin/dashboard',function(){
//     return view('admin.index');})
// }
// );

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee/dashboard', function () {
        return view('employee.dashboard');
    })->name('employee.dashboard');
});