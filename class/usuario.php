<?php 

class Usuario {


	private $usuario_id;
	private $nome;
	private $email;
	private $cpf;
	private $login;
	private $senha;
	private $nivel;
	private $ativo;
	private $cadastro;



	public function setUsuario($usuario_id, $nome, $email, $cpf, $login, $senha, $nivel, $ativo, $cadastro ){

		$this->usuario_id = $usuario_id;
		$this->nome = $nome;
		$this->email = $email;
		$this->cpf = $cpf;
		$this->login = $login;
		$this->senha = $senha;
		$this->nivel = $nivel;
		$this->ativo = $ativo;
		$this->cadastro = $cadastro;

	}

	public function Usuario($nome, $email, $cpf, $login, $senha, $nivel, $ativo, $cadastro){

		$this->nome = $nome;
		$this->email = $email;
		$this->cpf = $cpf;
		$this->login = $login;
		$this->senha = $senha;
		$this->nivel = $nivel;
		$this->ativo = $ativo;
		$this->cadastro = $cadastro;

	}


	

    
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * @return mixed
     */
   

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     *
     * @return self
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * @param mixed $cadastro
     *
     * @return self
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;

        return $this;
    }



    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }
}


?>