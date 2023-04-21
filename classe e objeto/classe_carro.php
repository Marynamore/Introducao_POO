<?php
class Carro{
    //atributos
    public $modelo;
    public $fabricante;
    public $ano;
    public $vel;

    //metodos
    public function acelerar(){
        $this->vel ++;
    }//fim acelerar

    public function info(){
        echo "<br><hr>";
        echo "<br>Modelo :<b>".$this->modelo."</b>";
        echo "<br>Ano:<b>".$this->ano."</b>";
        echo "<br>Vel:<b>".$this->vel."</b><br>";
        echo"<hr>";
    }//fim info

}//fim carro

//instanciar objeto do tipo carro
$fusca = new Carro();
$fusca->ano=1987;
$fusca->modelo ="1.6";
$fusca->fabricante = "Volks";
$fusca->vel = 0;
$fusca->info();
$fusca->acelerar();
$fusca->acelerar();
$fusca->info();

$cam = new Carro();
$cam->ano=2017;
$cam->modelo="Camaro";
$cam->vel=0;
$cam->acelerar();
$cam->info();
