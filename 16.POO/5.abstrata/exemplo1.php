<?php 
	//Classe abstrata não pode ser um objeto, mas pode ser extansiada.
	interface Veiculo
	{

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo 
	{

		public function acelerar($velocidade)
		{
			echo "O veículo acelerou até " . $velocidade . " km/h";
		}

		public function frenar($velocidade)
		{
			echo "O carro freiou quando estava a " . $velocidade . " km/h";
		}

		public function trocarMarcha($marcha)
		{
			echo "O veículo passou a " . $marcha ."ª marcha";
		}
	}

   class DelRey extends Automovel {

   		public function empurrar(){

   		}
   }

   $carro = new Delrey();
   $carro->acelerar(200);


	

 ?>