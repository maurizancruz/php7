<?php 
	// Definição de get = pega e set = mudar.
	class Carro{

		private $modelo;
		private $motor;
		private $ano;

		// Métodos MODELOS

		public function getModelo(){

			return $this->modelo;
		}

		public function setModelo($valueModelo){

			$this->modelo = $valueModelo;
		}

		// Métodos MOTOR

		public function getMotor():float{

			return $this->motor;
		}

		public function setMotor($valueMotor){

			$this->motor = $valueMotor;
		}

		// Métodos ANO

		public function getAno():int{

			return $this->ano;
		}

		public function setAno($valueAno){

			$this->ano = $valueAno;
		}

		//Exibe todos os dados da classe
		function exibir(){
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}

	$gol = new Carro(); //Criei um Objeto (Cópia) da calsse Carros na variável $gol.
	$gol->setModelo("Gol GT");// Informei um valor para o atributo Modelo
	$gol->setMotor("1.6");//Infoma um valor para o atributo Motor
	$gol->setAno("2002"); //Informa um valor para o atributo Ano.

print_r($gol->exibir()); //É importante lembrar que para exibir um array é preciso do print_r. echo não funciona nesse caso, somente para variável.

echo "<br>";

var_dump($gol->exibir());

?>