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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/',[ProductController::class,'bienesDisponibles'] )->name('bienes-disponibles');
Route::get('/filtro-bienes',[ProductController::class,'filtroBienes'] )->name('filtro-bienes');
Route::get('/mis-bienes',[ProductController::class,'misBienes'] )->name('mis-bienes');
Route::get('/agregar-bienes',[ProductController::class,'agregarBienes'] )->name('agregar-bienes');
Route::post('/agregar',[ProductController::class,'agregar'] )->name('agregar');
Route::get('/edit/{id}',[ProductController::class,'edit'] )->name('edit');
Route::put('/update/{id}',[ProductController::class,'update'] )->name('update');
Route::delete('/delete/{id}',[ProductController::class,'destroy'] )->name('delete');



