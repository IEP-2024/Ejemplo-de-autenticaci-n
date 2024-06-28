<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;
use App\Http\Middleware\Administrador;

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,"Login"]);

Route::get('/register', function () {
    return view('signup');
});

Route::post('/register',[UserController::class,"Register"]);

Route::get('/logout',[UserController::class,"Logout"]);

Route::get('/privado', function() {
    return view('privado');
}) -> middleware(Autenticacion::class)
    -> middleware(Administrador::class);