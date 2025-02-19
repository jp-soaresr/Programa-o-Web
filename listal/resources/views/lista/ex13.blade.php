@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex13">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="p1" class="form-label">Informe seu valor investido:</label>
        <input type="number" id="p1" name="p1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="p2" class="form-label">Informe juros:</label>
        <input type="number" id="p2" name="p2" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="p3" class="form-label">Informe periudo:</label>
        <input type="number" id="p3" name="p3" class="form-control" required="" step="0.01">
    </div>

 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($resp)
 
    <p>Seu perimetro e: {{ $resp }}</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
