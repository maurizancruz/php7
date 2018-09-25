<?php 
	
	class Documento{

		private $numero;

		public function getNumero()
		{

			return $this->numero;
		}

		public function setNumero($n)
		{

			$this->numero = $n;
		}

	}

	class CPF extends Documento { // A classe CPF é filha da classe Documento e herda todos os atributos e métodos.

		public function validar():bool
		{

			$nemeroCPF = $this->getNumero(); // Por ser filha da classa Documento, a classe CPF tem acesso ao método getNumero.

			//Aqui vai toda validação do CPF.
			return true;
		}

	}

	$doc = new CPF();
	$doc->setNumero("1323213213123-56");
	var_dump($doc->validar());

	echo "<br>";

	echo $doc->getNumero();

 ?>