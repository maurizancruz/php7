<?php 
	
	class Cadastro{//O nome da classe deve ser o mesmo do arquivo. Esse é um dos padrões da organização.

		private $nome;
		private $amail;
		private $senha;

		public function getNome(){
			return $this->nome;
		}		

		public function getEmail(){
			return $this->email;
		}		

		public function getSenha(){
			return $this->senha;
		}

		public function setNome($valueNome){

			$this->nome = $valueNome;
		}

		public function setEmail($valueEmail){
			$this->email = $valueEmail;
		}

		public function setSenha($valueSenha){
			$this->senha = $valueSenha;
		}

		public function __toString(){
			return json_encode(array(
				"nome"=>$this->getNome(),
				"email"=>$this->getEmail(),
				"senha"=>$this->getSenha()
			));
		}


	}
	
 ?>