<?php 
	namespace Cliente;
	
	class Cadastro extends \Cadastro { // O Contrabarra volta uma pasta e procura pela pasta Cliente.
		public function registrarVenda(){
			echo "Foi registrada uma venda para o cliente ".$this->getNome();
		}
	}

 ?>