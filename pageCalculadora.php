<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Classe Usuario</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Calculadora Aritmética</h1>
        <form action="./controle/calculadora_control.php" method="post">
            <label for="v1" class="field-label">Digite um número a ser calculado</label>
            <input type="number" name="valor1" id="idnome" class="field" step="0.01">
            <label for="v2" class="field-label">Digite outro número a ser calculado</label>
            <input type="number" name="valor2" id="idnome" class="field" step="0.01">
            <input type="submit" value="Calcular" class="field-submit">
        </form>
    </main>
</body>
</html>

