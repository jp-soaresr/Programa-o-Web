@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex4">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura</label>
        <input type="number" id="largura" name="largura" class="form-control" required="">
    </div>
 
    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>
 
    
 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($resp)
 
    <p>A sua area e: {{ $resp }}</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
