<?php

use App\Http\Controllers\ProductoControllers;
use App\Http\Controllers\SteepheneControllers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return "Hola Instructor Steephene";
});

Route::get('/mensaje', [SteepheneControllers::class, 'mensaje']);

Route::resource('/Productos', ProductoControllers::class);
