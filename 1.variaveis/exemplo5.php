<?php 
	// Aqui vc está na rua, fora das duas casas.
	$nome = "Glaucio";
	
	// Sua casa
	// Cada escopo é definido pelas {}.
	// Em cada escopo, somente as variáveis que estão dentro são reconhecidas
	function teste() {
		global $nome; // Foi declaro que a variável pode ser acessada fora do escopo.
		echo $nome;
	};

	// Cada do vizinho
	function teste2(){
		$nome="João";
		echo $nome . " " ."Agora no teste 2";

	};

	teste();
	teste2();
 ?>