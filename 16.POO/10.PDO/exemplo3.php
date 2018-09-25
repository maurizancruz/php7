<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "Ketylo";
	$password = "83482842384";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "<h3>Dados Cadastrados com Sucesso</h3>";
	
 ?>