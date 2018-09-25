<?php 

	$pessoas = array();

	// A função array_push() adiciona valores no array.
	// No caso, $pessoas é um array e recebe outro array com os valores.

	array_push($pessoas, array(
		'nome' => 'Jõão',
		'idade' => 20
		));

	array_push($pessoas, array(
		'nome' => 'Glaucio',
		'idade' => 25
		));

	print_r($pessoas);

	echo "<br>";

	print_r($pessoas[1]);

	echo "<br>";
	
	print_r($pessoas[1]['idade']);

 ?>