<?php 

	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if ($conn->connect_error) {

		echo "Error: ". $conn->connect_error;

	}
	
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)"); //Prepara para gravação dos dados.
	$stmt->bind_param("ss", $login, $pass);//Defina o tipo de dados que será passado, no caso, a primeira letra para cada tipo de value. No exemplo, são duas string
	// ATENÇÃO: Os valores só podem ser passados por $variáveis, não aceita o valor direto entre aspas.

	$login = "Benício";
	$pass = "12345";

	$stmt->execute(); // Para gazer nova gravação no banco não precisa inserir os comandos SQL novamente, basta atribuir os valores às variáveis e executar o comando execute();

	$login = "Maurizan";
	$pass = "12345";

	$stmt->execute();
 ?>