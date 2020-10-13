<?php

/*
use Illuminate\Support\Facades\Route;

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/','app');
Route::get('/libro', function(){
    return view('libro');
});

Route::get('/registro', function(){
    return view('registro');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA DEL PANDEL DE ADMINISTRADOR
Route::get('/admin', function(){
    return view('admin');
});

Route::get('/about', function(){
    return view('about');
});