<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});

Route::get('/cartList', [ProductController::class, 'cartList']);
