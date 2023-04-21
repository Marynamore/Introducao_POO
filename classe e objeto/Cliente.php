<?php

// public private protected
    class Cliente{
        public string $nome;
        public int $cpf;
        public int $dataNascimento;
        public string $endereco;
        public int $telefone;
        public string $email;
    }

    $cliente = new Cliente();

    $cliente->nome="Jéssica";
    $cliente->cpf="12345678910";
    $cliente->dataNascimento="12122012";
    $cliente->endereco="Minhacasa";
    $cliente->telefone="999999999";
    $cliente->email="jessica.etc@gmail.com";
    
// var_dump($cliente);

    echo "
        <meta charset='UTF-8'>
        <br><br>
        <div align='center'><h1>Dados do cliente: $cliente->nome</h1>
        <table border='1px' align='center' width='300'>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <input type='text' value='$cliente->nome'>
                </td>
            </tr>
            <tr>
                <td>
                    CPF:
                </td>
                <td>
                    <input type='text' value='$cliente->cpf'>
                </td>
            </tr>
            <tr>
                <td>
                    Data de Nascimento:
                </td>
                <td>
                    <input type='text' value='$cliente->dataNascimento'>
                </td>
            </tr>
            <tr>
                <td>
                    Endereço:
                </td>
                <td>
                    <input type='text' value='$cliente->endereco'>
                </td>
            </tr>
            <tr>
                <td>
                    Telefone:
                </td>
                <td>
                    <input type='text' value='$cliente->telefone'>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type='text' value='$cliente->email'>
                </td>
            </tr>
        </table>
        </div>
    ";

?>