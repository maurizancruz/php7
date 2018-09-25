<?php 
	
	class Pessoa{

		public $nome = "Lorenzo Medeiros";
		protected $idade = 48; // Só pode acessar dentro da classe ou por herança.
		private $senha = "123456"; // Somente pode acessar dentro da classe.

		public function verDados(){ // Como a função é publica, os metodos podem ser acessados fora da classa.

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha;
		}

	}

	$objeto = new Pessoa();

	//echo $objeto->senha . "<br>";

	$objeto->verDados();

 ?>