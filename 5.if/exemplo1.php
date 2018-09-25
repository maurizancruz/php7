<?php 
	$qualSuaIdade = 70;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if ($qualSuaIdade <= $idadeCrianca){

			echo "Criança";

	} else {

		echo "Não é criança";

	}

	echo "<br>";

	if ($qualSuaIdade < $idadeCrianca){

			echo "Criança";

	} else if ($qualSuaIdade < $idadeMaior){

			echo "Adolescente";

	} else if($qualSuaIdade < $idadeMelhor){

			echo "Adulto";
	}else {

		echo "Idoso";
	}

	echo "<br>";

	echo ($qualSuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade"; // Condição se simples, de uma resposta SIM OU NÃO.
 ?>