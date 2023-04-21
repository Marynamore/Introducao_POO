<?php 

require_once './classe/classe_pessoa.php';

class Aluno extends Pessoa{

    private $nota;

    public function __construct($nome, $anoNascimento,$nota)
    {
     parent::__construct($nome,$anoNascimento); //ele faz uma referencia a classe PAI (pessoa->)
     $this->nota = $nota;   
    }

    public function mostrarDadosNovos()
    {
        parent::mostrarDadoNovo();
        echo "<p>Nome: $this->nota</p>";
    }

    function getNota(){
        return $this->nota;
    }

    function setNota($nota){
        $this->nota = $nota;
    }
}
