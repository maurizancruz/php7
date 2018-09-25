<?php 
	// Foreach quer dizer PARA CADA, ou seja, para cada item execute determinada instrução.

	$meses =  array(
		'Janeiro', 'Fevereiro', 'Março',
		'Abril', 'Maio', 'Junho', 
		'Julho', 'Agosto', 'Setembro', 
		'Outubro', 'Novembro', 'Dezembro'
	);
	foreach ($meses as $index => $mes) {
		echo "Index: ".$index. "<br>";
		echo "o mês é: " .$mes. "<br> <br>";
	}

 ?>