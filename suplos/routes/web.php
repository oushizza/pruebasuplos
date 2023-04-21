<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/mis-bienes',[ProductController::class,'misBienes'] )->name('mis-bienes');
Route::get('/bienes-disponibles',[ProductController::class,'bienesDisponibles'] )->name('bienes-disponibles');
Route::get('/agregar-bienes',[ProductController::class,'agregarBienes'] )->name('agregar-bienes');
Route::post('/agregar',[ProductController::class,'agregar'] )->name('agregar');


