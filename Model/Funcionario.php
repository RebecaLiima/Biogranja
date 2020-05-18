<?php


class Funcionario
{
    private $id;
    private $nome;
    private $cargo;

    /**
     * Funcionario constructor.
     * @param $id
     * @param $nome
     * @param $cargo
     */
    public function __construct($id, $nome, $cargo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }




}