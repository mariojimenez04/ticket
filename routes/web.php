<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavegacionController;
use Illuminate\Support\Facades\Route;

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

/* Iniciar sesion */
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');

/* Registrar usuarios */
Route::get('/admin/register', [LoginController::class, 'register'])->name('user.register');
Route::post('/admin/register', [LoginController::class, 'store'])->name('user.store');

Route::get('/index', [NavegacionController::class, 'index'])->name('index');
