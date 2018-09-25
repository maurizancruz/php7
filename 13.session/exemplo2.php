<?php 
	
	require_once("config.php");
	
	session_unset($_SESSION["nome"]); // Limpa a variável, mas ela continua a existir.

	session_destroy(); // Remove o usuário da sessão.

	echo $_SESSION["nome"];

 ?>