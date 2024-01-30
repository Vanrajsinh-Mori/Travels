<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Projectcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/', function () {
    //     return view('index');
    // });
    Route::get('/register', [logincontroller::class, 'registerview'])->name('register');
    Route::post('/register', [logincontroller::class, 'register'])->name('register');
    Route::get('/login', [logincontroller::class, 'loginview'])->name('loginview');
    Route::post('/login', [logincontroller::class, 'login'])->name('login');
    Route::get('/logout', [logincontroller::class, 'logout'])->name('logout');
    // Route::get('/search', [productcontroller::class, 'productview'])->name('search');
    // Route::get('/', [productcontroller::class, 'productview'])->name('productview');
});

Route::get('/', [Projectcontroller::class, 'view']);
Route::get('/hotels/{id}', [Projectcontroller::class, 'hotels'])->name("hotels");
