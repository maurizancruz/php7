<?php 
// O do while executa pelo menos mais uma vez, mesmo se a condição for falsa.

$total = 150;
$desconto = 0.9;

do {

	$total *= $desconto;

} while ($total > 30); 

// O while sempre tem que ter um contador para estabalecer até que ponto ele pode dar loop. Caso contário, ele vira um loop infinito.

echo $total;


 ?>