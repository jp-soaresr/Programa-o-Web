@extends('layout')

@section('conteudo')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Números</title>
    <!-- Adicionando o Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Centralizando a caixa no meio da tela */
        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>


<div class="form-container">
    <h3 class="text-center">Calculadora</h3>
    <form method="post" action="/lista2ex1" >

        @csrf

        <div class="mb-3">
            <label for="num1" class="form-label">Número 1</label>
            <input type="number" class="form-control" id="num1" required>
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Número 2</label>
            <input type="number" class="form-control" id="num2" required>
        </div>
        <button type="button" class="btn btn-primary w-100">Calcular</button>
    </form>
    <div id="resultado" class="mt-3"></div>

  
        @isset($resp)
            <p>O valor da soma é {{$resp}}</p>
        @endisset
    </div>


@endsection