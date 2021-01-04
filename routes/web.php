<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoverController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discover', [DiscoverController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/login', function () {
    return view('login');
});
