<?php

use App\Http\Controllers\DataSiswaController;
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
    return view('home', [
        'title' => 'Welcome To My Website',
        'name' => 'Ari Setiawan ❤'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'Welcome To My About',
        'name' => 'Ari Setiawan ❤'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Welcome To My Contact',
        'name' => 'Ari Setiawan ❤'
    ]);
});

Route::resource('/DataSiswa', DataSiswaController::class);