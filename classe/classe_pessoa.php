<?php 

class Pessoa{
    private $nome;
    private $anoNascimento;

    function __construct($nome, $anoNascimento)
    {
      $this->nome = $nome;
      $this->anoNascimento = $anoNascimento;   
    }

    function mostraDadoovo(){
        echo "<p>Nome: $this->nome</p>";
        echo "<p>Ano de Nascimento $this->anoNascimento</p>";
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getAnoNascimento(){
        return $this->anoNascimento;
    }

    function setAnoNascimento($anoNascimento){
        $this->anoNascimento = $anoNascimento;
    }
}
