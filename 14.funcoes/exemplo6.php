<?php 
	$pessoa = array(
		'nome' => 'João',
		'idade'=> 20
	);

	foreach ($pessoa as &$value) {

		if (gettype($value) === 'integer') $value += 10;
		echo $value.'<br>';
	}

	print_r($pessoa);

	// Veja que o & antes do parametro da função altera o valor da variável. 
 ?>