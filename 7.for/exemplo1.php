<?php 

	// $i = 0 / Valor inicial
	// $I <= 20 / Condição faça até
	// $i++ / Incremento de cada loop

	for ($i = 0; $i <= 100; $i+=5) { 
		
		if($i >= 50 && $i <= 80) continue;

		if($i === 90) break;

		echo $i . "<br>";
	}
 ?>