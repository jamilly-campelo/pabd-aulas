@extends('templates.template_principal')

@section('titulo', 'Resultado do seu IMC')

@section('conteudo')

<h3>O resultado do seu IMC é:</h3>
<h3>{{ $imc }}</h3>
<hr>
<h1>Sua classificação é: 
    @if ($imc < 18.5)
        <span class="text-warning">Abaixo do peso</span>
    @elseif ($imc < 25)
        <span class="text-warning">Peso normal</span>
    @elseif ($imc < 30)
        <span class="text-warning">Sobrepeso</span>
    @elseif ($imc < 35)
        <span class="text-warning">Obesidade grau I</span>
    @elseif ($imc < 40)
        <span class="text-warning">Obesidade grau II</span>
    @else
    <span class="text-warning">Obesidade mórbida</span>
    @endif
</h1>
<a href="/">Voltar </a>

@endsection