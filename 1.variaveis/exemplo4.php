<?php 
// Variáveis pré-definidas, Arrays super globais e podem ser acessadas em qualquer ponto do PHP.

	$nome = (int)$_GET["a"];
	$numero = (int)$_GET["b"];

	// para passar o valor da varíável, usar se o "?a=123"
	// Ou seja, a variável "a", tem o valor 123
	// Toda informação que vier por $_GET ou $_POST será sempre String = texto.
	//Para converter a variável para um número inteiro, vc precisa declarar a o tipo de dado antes da variável. Exemplo (int)$_GET
	// para enviar mais de variável pelo $_GET, você só precisa concatenar com "&"

	//var_dump($nome);
	//var_dump($numero);

	$ip=$_SERVER["REMOTE_ADDR"]; // Essa variável pega o número do IP do Usuário.
	//echo $ip;
	$arquivo = $_SERVER["SCRIPT_NAME"]; // pega o arquivo que está sendo acessado.
	echo $arquivo;



 ?>