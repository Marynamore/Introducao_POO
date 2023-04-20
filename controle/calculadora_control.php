<?php 
require_once '../classe/classe_calculadora.php';


$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$calcular = new Calculadora();

$soma = $calcular->soma($valor1,$valor2);
$subtracao = $calcular->subtracao($valor1,$valor2);
$multiplicacao = $calcular->multiplicacao($valor1,$valor2);
$divisao = $calcular->divisao($valor1,$valor2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <h1>Resultado da Calculadora Aritmética</h1>
        <table>
            <tr>
                <th>Primeiro Número</th>
                <th>Operador Aritmético</th>
                <th>Segundo Número</th>
                <th>Igual</th>
                <th>Resultado da Operação</th>
            </tr>
            <tr>
                <td><strong><?=$valor1;?></strong></td>
                <td><i class="fa-solid fa-plus"></i></td>
                <td><strong><?=$valor2;?></strong></td>
                <td><i class="fa-solid fa-equals"></i></td>
                <td><strong><?=$soma;?></strong></td>
            </tr>
            <tr>
                <td><strong><?=$valor1;?></strong></td>
                <td><i class="fa-solid fa-minus"></i></td>
                <td><strong><?=$valor2;?></strong></td>
                <td><i class="fa-solid fa-equals"></i></td>
                <td><strong><?=$subtracao;?></strong></td>
            </tr>
            <tr>
                <td><strong><?=$valor1;?></strong></td>
                <td><i class="fa-solid fa-xmark"></i></td>
                <td><strong><?=$valor2;?></strong></td>
                <td><i class="fa-solid fa-equals"></i></td>
                <td><strong><?=$multiplicacao;?></strong></td>
            </tr>
            <tr>
                <td><strong><?=$valor1;?></strong></td>
                <td><i class="fa-solid fa-divide"></i></td>
                <td><strong><?=$valor2;?></strong></td>
                <td><i class="fa-solid fa-equals"></i></td>
                <td><strong><?=$divisao;?></strong></td>
            </tr>
        </table>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
