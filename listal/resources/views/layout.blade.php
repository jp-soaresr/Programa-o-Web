<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Números</title>
    <!-- Adicionando o Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('cabecalho')


<div class="container my-4"></div>
    @yield('conteudo')

<div class="form-container">
    <h3 class="text-center">Calculadora</h3>
    <form id="form-calculo">
        <div class="mb-3">
            <label for="numero1" class="form-label">Número 1</label>
            <input type="number" class="form-control" id="numero1" required>
        </div>
        <div class="mb-3">
            <label for="numero2" class="form-label">Número 2</label>
            <input type="number" class="form-control" id="numero2" required>
        </div>
        <button type="button" class="btn btn-primary w-100" onclick="calcular()">Calcular</button>
    </form>
    <div id="resultado" class="mt-3"></div>
</div>
</body>