<?php
    $op = $_GET['operacao']; // verbos são como arrays do Java
    $n1 = rand(1, 99);
    $n2 = rand(1, 99);

    switch ($op) {
        case 'soma':
            $op = '+';
            break;
        case 'subtracao':
            $op = '-';
            break;
        case 'multiplicacao':
            $op = 'x';
            break;
        default:
            $op = '/';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculus - Uma forma divertida de cálculo mental!</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1 id="titulo">Nova Partida!</h1>
    <div class="partida">
        <div class="numeros">
            <span><?php echo $n1; ?></span>
            <span><?php echo $op; ?></span>
            <span><?php echo $n2; ?></span>
        </div>
        <div class="resultado">
            <form method="POST" action="/resultado.php?n1=<?=$n1?>&n2=<?=$n2?>&operacao=<?=$_GET['operacao']?>"> <!-- com POST não aparece a entrada na url, para onde o formuário será enviado -->
                <legend>Resposta</legend>
                <input class="form" type="number" name="resposta"> <!--todo form tem um elemento "name"-->
                <button class="btn" type="submit">Submeter</button>
            </form>
        </div>
    </div>
</body>
</html>