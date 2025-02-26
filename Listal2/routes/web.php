<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaEx;
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



Route::get('ex1', [ListaEx::class, 'ex1']);

Route::post('/lista2ex1', [ListaEx::class, 'resp1']);