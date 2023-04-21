<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Pessoa Instanciada</title>
</head>
<body>
    <?php 
        /**
         * include      => inclui mesmo com erros
         * require      => interrompe se tiver erros
         * include_once => inclui uma vez
         * require_once => inclui uma vez
        */

        //incluindo apenas uma vez a classe que criamos anteriormente e a herança
        require_once './classe/classe_pessoa.php';
        require_once './aluno_heranca.php';

        
        //Atribuindo valores aos atributos que criamos
        $p = new Pessoa("Luna",1999);
        $aluno = new Aluno("Jully",2006,7.0);

        //executando o método
        $p->mostrarDadoNovo();
        $aluno->mostrarDadoNovo();

        $aluno->mostrarDadosNovos();
    
    ?>
</body>
</html>