<?php 
	//MÉTODO CONSTRUTOR para pssar os valores padrão dos atriburos.
	class endereco{

		 private $logadouro;
		 private $numero;
		 private $cidade;
		 private $uf;

		 public function __construct($a, $b, $c){ //Atribui valores aos atributos ao criar a classe.

		 		$this->logadouro = $a;
		 		$this->numero = $b;
		 		$this->cidade = $c;
		 }

		 public function __destruct(){ //Destroi a variável

		 		var_dump("DESTRUIR");
		 }

		 public function __toString(){ //Transforma em uma String.

		 	return $this->logadouro. ", " .$this->numero. " - ". $this->cidade;

		 }

	}

	$meuEndereco = new endereco("QE 40, rua 21, lote 14, apto", "203", "Guará");
	
	echo $meuEndereco;
	
	echo "<br>";

	var_dump($meuEndereco);

	unset($meuEndereco); // o unset destroi uma variável, no casso $meuEndereco contém um array e é considerendo uma váriável.
 ?>