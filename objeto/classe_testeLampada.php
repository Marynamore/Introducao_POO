<?php
//testeLampada.php
require_once "Lampada.php";
//a partir daqui não precisa copiar:
$luz = new Lampada("purple");//instanciar - construtor chamado
$luz2= new Lampada("Pink");
$luz->Ligar();
$luz2->Ligar();
$luz->ligar();  
