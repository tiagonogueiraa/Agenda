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

		public function incluirContato(Contato $contato)
		{


			$sql = $this->con->prepare("INSERT INTO contato( nome, telefoneFixo, telefoneCelular, rua, bairro, cidade, estado, cep, pais) VALUES (:nome, :telefoneF, :telefoneC, :rua, :bairro, :cidade, :estado, :cep, :pais)");

			$sql->bindValue(':nome', $contato->getNome());
			$sql->bindValue(':telefoneF', $contato->getTelefoneFixo());
			$sql->bindValue(':telefoneC', $contato->getTelefoneCelular());
			$sql->bindValue(':rua', $contato->getRua());
			$sql->bindValue(':bairro', $contato->getBairro());
			$sql->bindValue(':cidade', $contato->getCidade());
			$sql->bindValue(':estado', $contato->getEstado());
			$sql->bindValue(':cep', $contato->getCep());
			$sql->bindValue(':pais', $contato->getPais());


			$sql->execute();
		}

		public function getContatos(){

			$rs = $this->con->query("SELECT * FROM contato");

			$lista = array();
			while ($contato = $rs->fetch(PDO::FETCH_OBJ)) {

				$lista[] = $contato;
			}

			return $lista;

		}



	}


 ?>