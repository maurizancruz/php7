<?php 
	require_once("config.php");

	use Cliente\Cadastro;
	
	$cad = new Cadastro();
	$cad->setNome("Benício Santana Cruz");
	$cad->setEmail("benicio@gmail.com");
	$cad->setSenha(12345);

	$cad->registrarVenda();

 ?>