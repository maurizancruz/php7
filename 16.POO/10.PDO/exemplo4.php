<?php 
	//INSERT
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "Renato";
	$password = "83482842384";
	$id = 4;
 
	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "<h3>Dados Alterados com Sucesso</h3>";
	
 ?>