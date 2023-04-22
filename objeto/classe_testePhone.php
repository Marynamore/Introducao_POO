<?php
/**
 * include      => inclui mesmo com erros
 * require      => interrompe se tiver erros
 * include_once => inclui uma vez
 * require_once => inclui uma vez
*/
require_once "../classe/classe_smartphone.php";

//Atribuindo valores aos atributos que criamos
$zenfone = new Smartphone("Zenfone X2","Asus","Android 10");
$Aifone  = new Smartphone("Iphone x20","Apple","IOS 10");
$Aifone->numero= "061999-9982";

//executando o método
echo "primeira tentativa para ligar :";
$zenfone->ligar($Aifone);
$Aifone->ocupado = true;


echo "segunda tentativa para ligar :";
$zenfone->ligar($Aifone);
unset($Aifone);
