<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $numero1 = intval($request->input('numero1'));
    $numero2 = intval($request->input('numero2'));

    $soma = $numero1 + $numero2;
    return view('exer1', compact('soma'));
});