<?php
//classe_testeUsuario.php
require_once "../classe/classe_usuario.php";
$usuario  = new Usuario("Alguem da Silva","a.silva");
$usuario->verificar();

echo "<br> preenchendo senha e confirma senha .. <br>";
$usuario->setSenha("secreta");
$usuario->setConfirmaSenha("123");
$usuario->verificar();

echo "<br> igualando senha e confirma senha <br>";
$usuario->setSenha("secreta");
$usuario->setConfirmaSenha("secreta");
$usuario->verificar();
