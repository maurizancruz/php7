<?php 
	
	$a = 10;

	function trocaValor(&$b){ // o & que dizer passagem de valor por REFERÊNCIA, ou seja, o que acontece na função, altera o valor da variável.

		$b += 50;
		return $b;
	}

	echo trocaValor($a); // Pegou 10 e somou com 50, fez 60
	echo "<br>";
	echo $a; // apresenta o valor de 60 porque o paramentro da função foi passado por referência.
	echo "<br>";
	echo $a;
	echo "<br>";
	echo trocaValor($a); // Executou novamente a função e somou 50, tendo como resultado 110. 


	// É importante esclarecer que a variável $a que vale 10 é diferente da variável $a da função. Lembre-se do ESCOPO: O que acontece na função fica na função, tá bom?

	// Variável é uma coisa e parametro de função é outra.

 ?>