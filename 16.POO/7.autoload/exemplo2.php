<?php 

	function incluirClasses($nomeClasse){//Busca a classe na pasta. 

		if (file_exists($nomeClasse.".php") === true) {
			require_once($nomeClasse.".php");
		}
	}
	
	spl_autoload_register("incluirClasses");
	spl_autoload_register(function($nomeClasse){//Busca a classe dentro da pasta abstrata

		if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
			require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
		}
	});
	
	$carro = new Delrey();
	$carro->acelerar(80);

 ?>