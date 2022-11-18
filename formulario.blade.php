<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Calcule seu IMC</title>
</head>
<body>
    <div class="container">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>