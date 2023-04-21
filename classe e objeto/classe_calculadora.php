<?php

    class Calculadora{
        public $numero;

        public function __construct($valor){
            $this->numero=$valor;
        }            

        public function adiciona($valor){
            $this->numero+=$valor;
        }

        public function subtrair($valor){
            $this->numero-=$valor;
        }

        public function multiplicacao ($valor){
            $this->numero*=$valor;
        }
        
        public function divisao ($valor){
            $this->numero/=$valor;
        }

        public function exibir(){
            return $this->numero;
        }
    }    
    // require_once 'Calculadora_class.php';

        $resultado=new Calculadora(0);
        $resultado->adiciona(100);
        echo $resultado->exibir();
?>