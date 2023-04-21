<?php
//testePhone.php
require_once "Smartphone.php";
$zenfone = new Smartphone("Zenfone X2","Asus","Android 10");
$Aifone  = new Smartphone("Iphone x20","Apple","IOS 10");
$Aifone->numero= "061999-9982";
echo "primeira tentativa para ligar :";
$zenfone->ligar($Aifone);
$Aifone->ocupado = true;
echo "segunda tentativa para ligar :";
$zenfone->ligar($Aifone);
unset($Aifone);
