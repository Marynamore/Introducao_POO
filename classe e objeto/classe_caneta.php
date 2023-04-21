<?php

    class Caneta{
        public $cor;
        public $tamanho;
        public $texto;

        public function __construct($cor,$tam){
            // echo 'Olá, eu sou o método construtor';
            $this->cor=$cor;
            $this->tamanho=$tam;
        }
        public function exibirCor(){
            return $this->cor;
        } 
        public function exibirTamanho(){
            return $this->tamanho;
        }
        public function escrever(){
            $this->cor=$cor;
            $this->tamanho=$tam;
            $this->texto=$texto;

            return "<font color='{$this->cor}'><h{$this->tamanho}>$this->texto</h>{$this->tamanho}<";
        }
        public function __destruct(){
            // echo 'Olá, eu sou o método destrutor';
        }
    }

    // require_once 'Caneta.php';
    
    $result= new Caneta('Azul','1');
    // () é utilizado no método construst
    echo 'Caneta: '.$result->exibirCor();
    echo "<br>";
    echo 'Tamanho: '.$result->exibirTamanho();


?>