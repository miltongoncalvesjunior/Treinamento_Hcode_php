<?php
// tenta funcionar mesmo que o 
// nao exista o arquivo 
// procura no diretorio padrão inc . ele tras de la existe da base
//include "exemplo-01.php";
//include te da acesso a inc pass 
// permite include dinamico "que é uma pessima pratica"


require_once "exemplo-01.php";

require_once "exemplo-01.php";
/// obriga que o arquivo exista 

$resultado = somar(10,25);

echo $resultado;
?>