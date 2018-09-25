<?php 
	
	function ola(){
		//echo "Olá Mundo' <br>"; // Não é uma função, apenas uma rotina.
		return "Olá Mundo, eu sou uma função com Return"; // Se colocar um echo vai concdionar a função a apenas apresentar o testo, já no caso de return, esse valor pode ser utilizado em outras funções e variáveis.s
	}

	echo ola();

	$frase = ola();

	echo "<br>";

	echo strlen($frase);

 ?>