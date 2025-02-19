@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex2">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="temp1" class="form-label">Informe sua temperatura em celcios</label>
        <input type="number" id="temp1" name="temp1" class="form-control" required="">
    </div>
 
    
 
    
 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($resp)
 
    <p>Sua temperatura em fahrenheit: {{ $resp }}</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
