<?php
//Atributo Privado
class Lampada{
    public $cor;
    public $ligada;

    //Método construtor
    public function __construct($cor){
        $this->cor=$cor;
        $this->ligada=false;
        echo "<div style='color:".$this->cor."'>";
        echo "Uma lampada foi criada !</div><br>";
    }

    //Metodo => função
    function Ligar(){
        if($this->ligada){
            echo "A lampada ja esta ligada";
        }else{
            echo "<div style='width:100%;
               height:100%;background-color:".$this->cor."'></div>";
            $this->ligada= true;
        }
    }

    // Metodos acessores de cada atributo

    function getCor(){
        return $this->cor;
    }//pegamos os atributos privados e mostramos

    function getLigada(){
        return $this->ligada;
    }

    function setCor($cor){
        $this->cor = $cor;
    }//setamos os atributos privados

    function setLigar($ligada){
        $this->ligada = $ligada;
    }

    //Método desconstrutor
    public function __destruct()
    {
        echo "<br>Lampada ".$this->cor." destruida !<br> ";
    }
}
    

