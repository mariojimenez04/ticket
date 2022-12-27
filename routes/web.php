<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavegacionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

/* Cerrar sesion */
Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');

/* Registrar usuarios */
Route::get('/admin/register', [UserController::class, 'create'])->name('user.register');
Route::post('/admin/register', [UserController::class, 'store'])->name('user.store');

/*
*Pagina principal
*/
Route::get('/index', [NavegacionController::class, 'index'])->name('index');

/*
**Index para los tickets
*/
Route::get('/ticket/index', [TicketController::class, 'index'])->name('ticket.index');

/*
**Pagina para registrar los tickets
*/
Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');

/**
 * Pagina opara editar el registro del ticket
*/
Route::get('/ticket/edit/{tickets:ticket}', [TicketController::class, 'edit'])->name('ticket.edit');
Route::post('/ticket/update/{tickets:ticket}', [TicketController::class, 'update'])->name('ticket.update');


/**
 * Metodo para eliminar el registro del ticket
*/
