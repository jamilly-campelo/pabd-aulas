@extends('templates.template_principal')

@section('titulo', 'Calculadora de IMC')

@section('conteudo')

<form action="/calcular" method="post">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="peso" class="form-label">Peso (kg)</label>
        <input type="number" class="form-control" name="peso" id="peso">
    </div>
    <div class="mb-3">
        <label for="altura" class="form-label">Altura (cm)</label>
        <input type="number" class="form-control" name="altura" id="altura">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@endsection
    