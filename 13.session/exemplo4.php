<?php 
	
	session_id('tbq6i42v92s78uhra9mts9m6g6');

	require_once("config.php");

	session_regenerate_id();// É uma boa prática usar essa função na tela de login do site para força a criação de uma nova sessão.
	echo session_id();

	var_dump($_SESSION);

 ?>