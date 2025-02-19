@extends('layout') <!-- Pega o conteúdo do layout -->
 
@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->
 
<form method="post" action="/listaex15">
 
    @csrf <!-- Obrigatório ter -->
 
    <div class="mb-3">
        <label for="p1" class="form-label">Informe a quantidade de dias:</label>
        <input type="number" id="p1" name="p1" class="form-control" required="">
    </div>

 
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
@isset($horas)
 
    <p>Seu dias em horas e : {{ $horas }} e {{$minutos}} minutos e {{$segundos}} segundos</p>
 
@endisset
 
@endsection <!-- Finaliza a seção conteúdo -->
