<?php 

class Usuario(){


	private $usuario_id;
	private $nome;
	private $email;
	private $cpf;
	private $usuario;
	private $senha;
	private $nivel;
	private $ativo;
	private $cadastro;



	public function setUsuario($usuario_id, $nome, $email, $cpf, $usuario, $senha, $nivel, $ativo, $cadastro ){

		$this->usuario_id = $usuario_id;
		$this->nome = $nome;
		$this->email = $email;
		$this->cpf = $cpf;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->nivel = $nivel;
		$this->ativo = $ativo;
		$this->cadastro = $cadastro;

	}

	public function Usuario($nome, $email, $cpf, $usuario, $senha, $nivel, $ativo, $cadastro){

		$this->nome = $nome;
		$this->email = $email;
		$this->cpf = $cpf;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->nivel = $nivel;
		$this->ativo = $ativo;
		$this->cadastro = $cadastro;

	}


	public function getUsuarioId()
	{
		return $this->usuario_id;
	}


	public function setUsuarioId($usuario_id)
	{
		$this->usuario_id = $usuario_id;

		return $this;
	}


	public function getNome()
	{
		return $this->nome;
	}


	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}


	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}


	public function getCpf()
	{
		return $this->cpf;
	}


	public function setCpf($cpf)
	{
		$this->cpf = $cpf;

		return $this;
	}


	public function getUsuario()
	{
		return $this->usuario;
	}


	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;

		return $this;
	}


	public function getSenha()
	{
		return $this->senha;
	}


	public function setSenha($senha)
	{
		$this->senha = $senha;

		return $this;
	}

	public function getNivel()
	{
		return $this->nivel;
	}


	public function setNivel($nivel)
	{
		$this->nivel = $nivel;

		return $this;
	}


	public function getAtivo()
	{
		return $this->ativo;
	}


	public function setAtivo($ativo)
	{
		$this->ativo = $ativo;

		return $this;
	}

	public function getCadastro()
	{
		return $this->cadastro;
	}

	public function setCadastro()
	{
		$this->cadastro = $cadastro;
	}
}


?>