<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use app\Http\Controllers\ExerciciosCntro;
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


Route::get('/exer1', function () {
    echo 'oi';
});

Route::post('/exer1resp', function (Request $request) {
    $numero1 = intval($request->input('numero1'));
    $numero2 = intval($request->input('numero2'));

    $soma = $numero1 + $numero2;
    return view('exer1', compact('soma'));
});


Route::get('ex1', [ExerciciosCntro::class, 'abrirFormulario1']);

Route::post('/listaex1', [ExerciciosCntro::class, 'respostaExcer1']);



Route::get('ex2', function () {
    return view('lista.ex2');
});

Route::post('/listaex2', function (Request $request) {
    $temp1 = floatval($request->input('temp1'));


    $resp = ($temp1 * 9 / 5) + 32;

    return view('lista.ex2', compact('resp'));
});



Route::get('ex3', function () {
    return view('lista.ex3');
});

Route::post('/listaex3', function (Request $request) {
    $temp1 = floatval($request->input('temp1'));


    $resp = ($temp1 - 32) * 5 / 9;

    return view('lista.ex2', compact('resp'));
});



Route::get('ex4', function () {
    return view('lista.ex4');
});

Route::post('/listaex4', function (Request $request) {
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));


    $resp = $largura * $altura;
    return view('lista.ex4', compact('resp'));;
});


Route::get('ex5', function () {
    return view('lista.ex5');
});

Route::post('/listaex5', function (Request $request) {
    $raio = floatval($request->input('raio'));


    $resp = M_PI * ($raio ** 2);
    return view('lista.ex5', compact('resp'));;
});



Route::get('ex6', function () {
    return view('lista.ex6');
});

Route::post('/listaex6', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));


    $resp = ($p1 * 2) + ($p2 * 2);
    return view('lista.ex6', compact('resp'));;
});




Route::get('ex7', function () {
    return view('lista.ex7');
});

Route::post('/listaex7', function (Request $request) {
    $p1 = floatval($request->input('p1'));



    $resp = 2 * M_PI * $p1;
    return view('lista.ex7', compact('resp'));;
});




Route::get('ex8', function () {
    return view('lista.ex8');
});

Route::post('/listaex8', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));


    $resp = $p1 ** $p2;
    return view('lista.ex8', compact('resp'));;
});



Route::get('ex9', function () {
    return view('lista.ex9');
});

Route::post('/listaex9', function (Request $request) {
    $p1 = floatval($request->input('p1'));

    $resp = $p1 / 100;
    return view('lista.ex9', compact('resp'));;
});




Route::get('ex10', function () {
    return view('lista.ex10');
});

Route::post('/listaex10', function (Request $request) {
    $p1 = floatval($request->input('p1'));

    $resp = $p1 * 0.62;
    return view('lista.ex10', compact('resp'));;
});


Route::get('ex11', function () {
    return view('lista.ex11');
});

Route::post('/listaex11', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));

    $resp = $p1 / ($p2 ** 2);
    return view('lista.ex11', compact('resp'));;
});


Route::get('ex12', function () {
    return view('lista.ex12');
});

Route::post('/listaex12', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));
    $desq = $p2 /100;
    $total_desq = $p1 * $desq;
    $resp = $p1 - $total_desq;
    return view('lista.ex12', compact('resp'));;
});



Route::get('ex13', function () {
    return view('lista.ex13');
});

Route::post('/listaex13', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));
    $p3 = floatval($request->input('p3'));

    $resp = $p1 * $p2 * $p3;
    return view('lista.ex13', compact('resp'));;
});




Route::get('ex14', function () {
    return view('lista.ex14');
});

Route::post('/listaex14', function (Request $request) {
    $p1 = floatval($request->input('p1'));
    $p2 = floatval($request->input('p2'));
    $p3 = floatval($request->input('p3'));

    $resp = $p1 * (1 + $p2) ** $p3;
    return view('lista.ex14', compact('resp'));;
});



Route::get('ex15', function () {
    return view('lista.ex15');
});

Route::post('/listaex15', function (Request $request) {
    $p1 = floatval($request->input('p1'));


     $horas = $p1 * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
    return view('lista.ex15', compact('horas','minutos', 'segundos'));;
});