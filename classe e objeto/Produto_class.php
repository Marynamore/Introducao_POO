<?php

class Produto {
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
}

$item = new Produto ();
$item1= new Produto();
$item2= new Produto();

    $item->nome="vazio";
    $item->preco="90,00";
    $item->descricao="vazio";
    $item->categoria="vazio";

    $item1->nome="Creme dental";
    $item1->preco="10,00";
    $item1->descricao="Sorriso";
    $item1->categoria="Higiene";

    $item2->nome="Água sanitária";
    $item2->preco="50,00";
    $item2->descricao="Quiboa";
    $item2->categoria="Limpeza";
    

   // print_r($produto);

echo "
    <meta charset='UTP-8'>
    <br><br>
    <div align='center'><h1>Dados do produto: $item->nome</h1>
    <table border='1px' align='center' width='300>
        <tr>
            <td>
                <label>Nome: </label>
            </td>
            <td>
                <input type='text' value='$item->nome'>
            </td>
        </tr>
        <tr>
            <td>
                <label>Preço: </label>
            </td>
            <td>
                <input type='text' value='$item->preco'>
            </td>
        </tr>
        <tr>
            <td>
                <label>Descrição: </label>
            </td>
            <td>
                <input type='text' value='$item->descricao'>
            </td>
        </tr>
        <tr>
            <td>
                <label>Categoria: </label>
            </td>
            <td>
                <input type='text' value='$item->categoria'>
            </td>
        </tr>
    </table>       
    </div>
";

echo "
    <div align='center'><h1>Dados do produto: $item1->nome</h1>
    <table border='1' align='center'>
    <br><br>
    <tr>
        <td>Nome: </td>
        <td>$item1->nome</td>
    </tr>
    <tr>
        <td>Preço: </td>
    <td>$item1->preco</td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td>$item1->descricao</td>
    </tr>
    <tr>
        <td>Categoria: </td>
        <td>$item1->categoria</td>
    </tr>
    </table>
";

echo "
    <div align='center'><h1>Dados do produto: $item2->nome</h1>
    <table border='1' align='center'>
    <br><br>
    <tr>
        <td>Nome: </td>
        <td>$item2->nome</td>
    </tr>
    <tr>
        <td>Preço: </td>
    <td>$item2->preco</td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td>$item2->descricao</td>
    </tr>
    <tr>
        <td>Categoria: </td>
        <td>$item2->categoria</td>
    </tr>
    </table>
";
?>