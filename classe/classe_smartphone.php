<?php
//Smartphone.php
class Smartphone{
    public $modelo;
    public $fabricante;
    public $SO;//Sistema Operacional
    public $numero;
    public $ocupado;

    //método construtor
    public function __construct($mo,$fab,$so){   
        $this->modelo = $mo;
        $this->fabricante = $fab;
        $this->SO = $so;
        $this->numero = "vazio";
        $this->ocupado =false;
        echo "<br> Smartphone ".$this->modelo." Fabricado !<br>";
    }//fim construtor

    function ligar(Smartphone $outroFone){
        if($outroFone->ocupado==false){
            echo "<br>Esta ligando para :".$outroFone->numero."<br>";
        }else{
            echo "<br>O telefone:".$outroFone->numero." esta ocupado<br>";
        }

    }//fim do método ligar

    public function __destruct()
    {
        echo "<br> O telefone :".$this->modelo." foi destruido !<br>";
    }//fim do metodo destruct

}//fim classe smartphone
//não precisa copiar
/*
echo "<pre>";
    print_r($zenfone);
echo "</pre>";
 */