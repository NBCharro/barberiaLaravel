<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'inicio'])->name('inicio');
Route::get('/empresa', [MainController::class, 'empresa'])->name('empresa');
Route::get('/servicios', [MainController::class, 'servicios'])->name('servicios');
// Route::get('/contacto', [MainController::class, 'contacto'])->name('contacto');
Route::get('/carrito', [MainController::class, 'carrito'])->name('carrito');
Route::get('/compraRealizada', [MainController::class, 'compraRealizada'])->name('compraRealizada');

Route::post('/actualizarCantidadCarrito', [MainController::class, 'actualizarCantidadCarrito'])->name('actualizarCantidadCarrito');
Route::post('/actualizarCarrito', [MainController::class, 'actualizarCarrito'])->name('actualizarCarrito');

Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('reservas', 'App\Http\Controllers\ReservaController');
Route::resource('contactos', 'App\Http\Controllers\ContactoController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
