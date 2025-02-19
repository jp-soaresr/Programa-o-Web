@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex1">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="nota1" class="form-label">Informe a primeira nota</label>
        <input type="number" id="nota1" name="nota1" class="form-control" required="">
    </div>
 
    <div class="mb-3">
        <label for="nota2" class="form-label">Informe a segunda nota</label>
        <input type="number" id="nota2" name="nota2" class="form-control" required="">
    </div>
 
    <div class="mb-3">
        <label for="nota3" class="form-label">Informe a terceira nota</label>
        <input type="number" id="nota3" name="nota3" class="form-control" required="">
    </div>
 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($media)
 
    <p>A média das notas é igual a: {{ $media }}</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
