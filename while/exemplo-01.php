<?php

$condicao = true;

while ($condicao) {
	# code...
$numero = rand(1,10);

if ($numero === 3) {
	# code...
	echo "TRES!!!";
	$condicao = false;
}

echo $numero . "";
}


?> 