<?php 
	// Ordem de precedência dos operadores
	$resultado1 = 10 + 3 / 2; // Dividi primeiro para depois somar.
	echo $resultado1;	

	echo "<br>";

	$resultado2 = (10 + 3) / 2; // Os parenteses atribui prioridade no cálculo
	echo $resultado2;	

	$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3; // Comprara se duas condições são verdadeiras.
	var_dump($resultado3);	

	$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // Comprara se uma ou outra é verdadeira
	var_dump($resultado4);

 ?>