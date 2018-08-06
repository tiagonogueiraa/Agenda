<?php 

class contato {

	private $nome;
	private $telefoneFixo;
	private $telefoneCelular;
	private $rua;
	private $cidade;
	private $cep;

	




    /**
     * @return mixed
     */
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
    public function getTelefoneFixo()
    {
        return $this->telefoneFixo;
    }

    /**
     * @param mixed $telefoneFixo
     *
     * @return self
     */
    public function setTelefoneFixo($telefoneFixo)
    {
        $this->telefoneFixo = $telefoneFixo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefoneCelular()
    {
        return $this->telefoneCelular;
    }

    /**
     * @param mixed $telefoneCelular
     *
     * @return self
     */
    public function setTelefoneCelular($telefoneCelular)
    {
        $this->telefoneCelular = $telefoneCelular;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     *
     * @return self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     *
     * @return self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }
}

 ?>