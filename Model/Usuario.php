<?php


class Usuario
{
    private $tipo;
    private $nome;
    private $login;
    private $senha;

    /**
     * Usuario constructor.
     * @param $tipo
     * @param $nome
     * @param $login
     * @param $senha
     */
    public function __construct($tipo, $nome, $login, $senha)
    {
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    

}