<?php 

//Atributo Privado
class Pessoa{
    private $nome;
    private $anoNascimento;

    //Método construtor
    function __construct($nome, $anoNascimento)
    {
      $this->nome = $nome;
      $this->anoNascimento = $anoNascimento;   
    }

    //Metodo => função
    function mostrarDadoNovo(){
        echo "<p>Nome: $this->nome</p>";
        echo "<p>Ano de Nascimento $this->anoNascimento</p>";
    }

    // Metodos acessores de cada atributo

    function getNome(){
        return $this->nome;
    }//pegamos os atributos privados e mostramos

    function getAnoNascimento(){
        return $this->anoNascimento;
    }

    function setNome($nome){
        $this->nome = $nome;
    }//setamos os atributos privados


    function setAnoNascimento($anoNascimento){
        $this->anoNascimento = $anoNascimento;
    }
}
