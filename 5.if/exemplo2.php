<?php 
	$compra = 15;
	$venda = 16;
	$lucro = $venda - $compra;

	if($venda > $compra){

			echo "Parabéns, você obteve lucro";
	} else{

			echo "Poxa, você teve prejuizo";
	}

	echo "<br>";

	$meuSalario = 4400;

	$salarioPedro = 1500;
	$salarioMarco = 2500;
	$salarioCida = 3500;

	if ($meuSalario < $salarioPedro) {
		
		echo "Você ganha menor que o Pedro";

	}else if ($meuSalario < $salarioMarco){

		echo "Você ganha mais que o Pedro, mas recebe menos que o Marco";

	}else if($meuSalario < $salarioCida){

		echo "Você ganha mais que o Marco, mas menos que a Cida";
	}else {

		echo "Eita, você ganha mais que todos eles juntos";
	}



 ?>