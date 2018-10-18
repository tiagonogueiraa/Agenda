<?php 

	require_once('conexao.php');
	require_once('usuario.php');

	class UsuarioDAO{


		private $con;

		function UsuarioDao()

		{
			$c = new Conexao();
			$this->con = $c->getConexao();

		}

		public function incluirUsuario(Usuario $usuario)
		{

			$sql = $this->con->prepare("INSERT INTO contato(nome, email, cpf, login, senha, nivel, ativo) VALUES (:nome, :email, :cpf, :login, :senha, :nivel, :ativo)");

			$sql->bindValue(':nome', $usuario->getNome());
			$sql->bindValue(':email', $usuario->getEmail());
			$sql->bindValue(':cpf', $usuario->getCpf());
			$sql->bindValue(':login', $usuario->getLogin());
			$sql->bindValue(':senha', $usuario->getSenha());
			$sql->bindValue(':nivel', $usuario->getNivel());
			$sql->bindValue(':ativo', $usuario->getAtivo());
			

			$sql->execute();
		}

		public function getUsuarios(){

			$rs = $this->con->query("SELECT * FROM usuario");

			$lista = array();
			while($contato = $rs->fetch(PDO::FETCH_OBJ)){

				$lista[] = $contato;
			}

			return $lista;

		}





	}

 ?>