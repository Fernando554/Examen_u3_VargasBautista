<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\publicacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Contracts\Session\Session;

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

Route::get('/', [publicacionController::class, 'index'])->name('index');

Route::get('/about', [publicacionController::class, 'about'])->name('about');

Route::get('/contact', [publicacionController::class, 'contact'])->name('contact');

Route::get('/registro', [publicacionController::class, 'registro'])->name('registro');

Route::get('/curso1', [publicacionController::class, 'curso1'])->name('curso1');
Route::get('/unidad1/{id}', [publicacionController::class, 'T_cursos'])->name('T_cursos');




//ruta registro
Route::get('/register', [RegisterController::class, 'create'])->name('register');
//metodo post para registro
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//ruta login
Route::get('/login', [SessionsController::class, 'create'])->name('login');
//metodo post para login
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

//ruta paraapi
Route::get('/index2', [ApiController::class, 'index2'])->name('index2');
Route::post('/index2',[ApiController::class, 'submit'])->name('api');
