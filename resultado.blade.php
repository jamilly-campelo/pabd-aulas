<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Resultado do seu IMC</title>
</head>
<body>

    <div class="container">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>