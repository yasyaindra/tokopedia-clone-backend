<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::get('/register', [AuthController::class,'register'])->name('register');

Route::post('/login', [AuthController::class,'login_action'])->name('login.post');

Route::post('/register', [AuthController::class,'register_action'])->name('register.post');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/toko/produk', function () {
    return view('products.single');
})->name('product');

Route::get('/toko', function () {
    return view('store.single');
})->name('store');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/notif', function () {
    return view('notification');
})->name('notification');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
