<?php 
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
	$stmt->execute();

	$resultados = $stmt->fetchALL(PDO::FETCH_ASSOC);
	echo json_encode($resultados);
 ?>