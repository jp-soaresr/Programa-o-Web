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
    echo 'oi';
});

Route::post('/exer1resp', function(Request $request){
    $numero1 = intval($request->input('numero1'));
    $numero2 = intval($request->input('numero2'));

    $soma = $numero1 + $numero2;
    return view('exer1', compact('soma'));
});


Route::get('ex1', function (){
    return view('lista.ex1');

});

Route::post('/listaex1', function (Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));

    $media = (($nota1 + $nota2 + $nota3)/ 3);
    return view('lista.ex1', compact('media'));
    
});



Route::get('ex2', function (){
    return view('lista.ex2');

});

Route::post('/listaex2', function (Request $request){
    $temp1 = floatval($request->input('temp1'));
   

    $resp = ($temp1 * 9/5) + 32;
    
    return view('lista.ex2', compact('resp'));
    
});



Route::get('ex3', function (){
    return view('lista.ex3');

});

Route::post('/listaex3', function (Request $request){
    $temp1 = floatval($request->input('temp1'));
   
   
    $resp = ($temp1 - 32) * 5 / 9;
    
    return view('lista.ex2', compact('resp'));
    
});



Route::get('ex4', function (){
    return view('lista.ex4');

});

Route::post('/listaex4', function (Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
   

    $resp = $largura * $altura;
    return view('lista.ex4', compact('resp'));;
    
});