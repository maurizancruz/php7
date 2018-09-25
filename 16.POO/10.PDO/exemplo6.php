<?php 
	//DELETE - Exclui dados, jamais use sem Where
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	$conn->beginTransaction();
	
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	$id = 13;

	$stmt->execute(array($id));

	$conn->rollBack();

	echo "<h3>Dado Deletado com Sucesso</h3>";
	
 ?>