<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
    return view('menu');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('login', [AuthController::class, 'authenticate']);

Route::get('/register', function () {
    return view('register');
});
Route::post('register',[AuthController::class, 'storeregister']);

Route::get('/Cassette', function () {
    return view('kaset');
});

Route::get('/CompactDisk', function () {
    return view('compactdisk');
});

Route::get('/payment', function () {
    return view('payment');
});