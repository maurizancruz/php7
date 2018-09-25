<?php 

	$conn = new mysqli("localhost", "root", "", "dbphp7");
	if ($conn->connect_error) {
		echo "Error: ". $conn->connect_error;
	}

	$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$data = array();

	while ($row = $resultado->fetch_assoc()) { //verifica se há dados para exibição. 
		//Se tiver, o valor é atribuido na variável $row.
		array_push($data, $row);
	}

	echo json_encode($data);

 ?>