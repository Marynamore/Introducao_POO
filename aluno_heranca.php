<?php 

require_once './classe/classe_pessoa.php';

class Aluno extends Pessoa{

    private $nota;

    function __construct($nome, $anoNascimento,$nota)
    {
     parent::__construct($nome,$anoNascimento);
     $this->nota = $nota;   
    }

    function mostraDadosovo()
    {
        parent::mostraDadoovo();
        echo "<p>Nome: $this->nota</p>";
    }
}
