@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex5">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio:</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    
 
 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($resp)
 
    <p>Seu perimetro e: {{ $resp }}</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
