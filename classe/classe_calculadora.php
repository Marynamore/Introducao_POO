<?php 


class Calculadora{
    private $valor1;
    private $valor2;
    
    
    function soma($valor1,$valor2){
        return $this->valor1 = $valor1 += $this->valor2 = $valor2;
        
    }

    function subtracao($valor1, $valor2){
        return $this->valor1 = $valor1 -= $this->valor2 = $valor2;
    }

    function multiplicacao($valor1, $valor2){
        return $this->valor1 = $valor1 *= $this->valor2 = $valor2;
    }

    function divisao($valor1, $valor2){
        return $this->valor1 = $valor1 /= $this->valor2 = $valor2;
    }

    function getValor1(){
        return $this->valor1;
    }

    function setValor1($valor1){
        $this->valor1 = $valor1;
    }

    function getValor2(){
        return $this->valor2;
    }

    function setValor2($valor2){
        $this->valor2 = $valor2;
    }
}
