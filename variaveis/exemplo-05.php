<?php

$nome = "Junior";

function teste () {

global $nome;
  echo "$nome";

}

function teste2()
{
$nome = "Junior";
	echo $nome."agora no teste 2";# code...


}


teste();
teste2();


?>