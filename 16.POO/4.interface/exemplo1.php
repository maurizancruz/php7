<?php 
	// A INTERFACE É UM CONTRATO QUE OBRIGA A IMPLEMENTAÇÃO DOS ATRIBUTOS E MÉTODOS.

	interface Veiculo{

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo {

		public function acelerar($velocidade)
		{
			echo "O veículo acelerou até " . $velocidade . "km/h";
		}

		public function frenar($velocidade)
		{
			echo "O carro freiou quando estava a " . $velocidade . "km/h";
		}

		public function trocarMarcha($marcha)
		{
			echo "O veículo passou a " . $marcha ."ª marcha";
		}

	}

	$carro = new Civic();
	$carro->trocarMarcha(3);
 ?>