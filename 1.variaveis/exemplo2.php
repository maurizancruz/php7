<?php 
	/*
	$anoNascimento = 1983;
	$nomeCompleto = "Pedro Luiz da Silva";
	*/
	$nome1 = "João";
	$sobrenome = "Rangel";
	$nomeCompleto = $nome1 . " " . $sobrenome; // Concatenação
	//echo $nomeCompleto;

	$nomePrimeiro = $nome1 . " * " . $sobrenome;
	//echo $nomePrimeiro;
	exit;

	echo $nome1;

	echo "<br/>";
                                      
	unset($nome1); // Usado para destruir a variável

	# Usado para verificar se a variável existe ou não.
	if (isset($nome1)) {
		echo $nome1;
	}

 ?>