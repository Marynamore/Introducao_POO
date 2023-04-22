<?php
/**
 * include      => inclui mesmo com erros
 * require      => interrompe se tiver erros
 * include_once => inclui uma vez
 * require_once => inclui uma vez
*/
require_once "../classe/classe_lampada.php";

//Atribuindo valores aos atributos que criamos
$luz = new Lampada("purple");//instanciar - construtor chamado
$luz2= new Lampada("Pink");

//executando o método
$luz->Ligar();
$luz2->Ligar();
$luz->ligar();  

