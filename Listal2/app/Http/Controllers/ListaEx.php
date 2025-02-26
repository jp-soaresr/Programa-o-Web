<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaEx extends Controller
{
    public function ex1(){
        return view('lista2.ex1');

    }
    
    public function resp1(Request $request){
        $num1 = floatval($request->input('num1'));
        $num2 = floatval($request->input('num2'));

        $soma = $num1 + $num2; 

        if($num1 == $num2){
            $resp = $soma * 3;
        }

    return view('lista2.ex1', compact('resp'));

    }
}
