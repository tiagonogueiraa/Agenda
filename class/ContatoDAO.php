<?php 

require_once('conexao.php');
require_once('contato.php');


	class ContatoDAO{


		private $con;


		function ContatoDao()
		{
			$c = new Conexao();
			$this->con = $c->getConexao();
		}

		public function incluirContato( Contato $contato)
		{


			$sql = $this->con->prepare("INSERT INTO contato( nome, telefoneFixo, telefoneCelular, rua, cidade, cep) VALUES (:nome, :telefoneF, :telefoneC, :rua, :cidade, :cep)");

			$sql->bindValue(':nome', $contato->getNome());
			$sql->bindValue(':telefoneF', $contato->getTelefoneFixo());
			$sql->bindValue(':telefoneC', $contato->getTelefoneCelular());
			$sql->bindValue(':rua', $contato->getRua());
			$sql->bindValue(':cidade', $contato->getCidade());
			$sql->bindValue(':cep', $contato->getCep());


			$sql->execute();
		}



	}


 ?>