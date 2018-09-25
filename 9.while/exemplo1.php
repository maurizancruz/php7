<?php 
// O While significa o mesmo que FAÇA ENQUANTO.

$condicao = true;

while ($condicao) {

$numero = rand(1, 10); // Faz o sorteio dentro de do intervalo informado.

if ($numero === 3) {
	echo "TRÊS";
	$condicao = false;
}
echo $numero . " ";
}

?>