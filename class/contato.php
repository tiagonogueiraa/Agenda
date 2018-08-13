<?php 

class Contato {

    private $id;
	private $nome;
	private $telefoneFixo;
	private $telefoneCelular;
	private $rua;
    private $bairro;
	private $cidade;
    private $estado;
	private $cep;
    private $pais;

    public function setContato($id, $nome, $telefoneFixo, $telefoneCelular, $rua, $bairro, $cidade, $estado, $cep, $pais) {

        $this->id = $id;
        $this->nome = $nome;
        $this->telefoneFixo = $telefoneFixo;
        $this->telefoneCelular = $telefoneCelular;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->pais = $pais;

    }

      public function Contato( $nome, $telefoneFixo, $telefoneCelular, $rua, $bairro, $cidade, $estado, $cep, $pais) {

        
        $this->nome = $nome;
        $this->telefoneFixo = $telefoneFixo;
        $this->telefoneCelular = $telefoneCelular;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->pais = $pais;

    }

    

    

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

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
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

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

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     *
     * @return self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }
}

 ?>