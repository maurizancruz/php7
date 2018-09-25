<?php 
	class Pessoa{

		public $nome;//Atributo
		
		public function falar(){//Método
			
			return "O meu nome é ".$this->nome;
		
		}

	}

	$glaucio = new Pessoa();//Objeto é uma copia da classe.
	$glaucio->nome = "Glaucio Daniel";//Colocando valor no atributo $Nome
	echo $glaucio->falar();//Método da classe.

?>