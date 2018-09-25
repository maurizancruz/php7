<?php 
 // pegar posição da busca na variável
	
	$frase = "A repetição é a mãe da retenção.";
	$palavra = "mãe";

	$q = strpos($frase, $palavra); // busca a posição da palavrã mãe

	$t = strlen($frase); //Conta o tamanho de uma string

	$texto = substr($frase, 0, $q); // mostrar apenas o texto que está ANTES da palavra mãe.

	$texto2 = substr($frase, $q, strlen($frase)); // mostrar apenas o texto que está ANTES da palavra mãe.

	$texto3 = substr($frase, $q + strlen($palavra), $t); // Mostra detro da $frase, a partir da posição 19 ($q) até a posição 


	echo $q;
	echo "<br>";

	echo $t;
	echo "<br>";		

	echo $texto;
	echo "<br>";	

	echo $texto2;
	echo "<br>";

	echo $texto3;
	echo "<br>";


 ?>