<?php
    $n1 = rand(1, 99); /*um número entre 1 e 99*/ 
    $n2 = rand(1, 99);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora de contar!</title>
    <link rel="stylesheet" href="CSS\estilo.css">
</head>
<body>
    <div class="numeros">
        <span><?php echo$n1;?></span>
        <span>x</span>
        <span><?php echo$n2;?></span>
    </div>
    <div id="entrada">
        <input type="number" name="form">
        <button>Conferir</button>
    </div>
</body>
</html>