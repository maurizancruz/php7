<?php 
	
	function ola($texto = "mundo", $periodo="Bom dia"){

		return "Olá $texto, $periodo <br>";

	}

	echo ola(); // Vai exibir Olá Mundo, porque mundo é a variável PADRÃO.
	echo ola(""); // Não vai exibir nada, pois a variável está vazia.
	echo ola("Glaucio", "Boa noite"); // Funcionamento normal da função.
	echo ola("João", "Tudo bem?"); // Funcionamento normal da função.

	// Paramentros que não tem valor padrão, coloque sempre a esquerda.

 ?>