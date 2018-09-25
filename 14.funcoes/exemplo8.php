<?php 

ini_set('display_erros', true);
error_reporting(E_ALL);

	// Novidades do PHP7 para as funções

	function soma(float ...$valores):float{ // diz que todos os valores são int (inteiros)

		return array_sum($valores); // Soma todos os valores.

	}

	echo var_dump(soma(2, 2));
	echo "<br>";
	echo soma(25, 33);
	echo "<br>";
	echo soma(1.5, 3.2);
	echo "<br>";

 ?>