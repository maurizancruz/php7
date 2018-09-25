<?php 
	//include "inc/exemplo1.php"; // Tenta funcionar, mesmo se o cóodigo estiver com erro ou o arquivo não existe.
	// Dá acesso ao include Path para procurar o arquivo caso não encontre no local indicado nele.

	//require "inc/exemplo1.php"; // Se tiver algum erro no código ou o arquivo não existe, ele apresenta um erro fatal. É mais seguro usar o require.

	require_once "inc/exemplo1.php"; // é o mais indicado porque ele não deixar ocorre o laço, ou seja, o seu arquivo chamar uma mesma função mais de uma vez. No caso, ele traz apenas uma vez. 

	$resultado = somar(25, 20);
	echo $resultado;

 ?>