<?php


class Granja
{
    private $nome;
    private $funcionarios;
    private $galinheiro;// a classe galinheiro contem as duas listas de galinheiros

    /**
     * Granja constructor.
     * @param $nome
     * @param $funcionarios
     * @param $galinheiros
     */
    public function __construct($nome, $funcionarios, $galinheiro)
    {
        $this->nome = $nome;
        $this->funcionarios = $funcionarios;
        $this->galinheiro = $galinheiro;
    }
    //Cria um funcionario e o insere na lista
    public function addFuncionario($id,$nome,$cargo){
        array_push($funcionarios, new Funcionario($id,$nome,$cargo));
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
    public function getFuncionarios()
    {
        return $this->funcionarios;
    }

    /**
     * @param mixed $funcionarios
     */
    public function setFuncionarios($funcionarios)
    {
        $this->funcionarios = $funcionarios;
    }

    /**
     * @return mixed
     */
    public function getGalinheiro()
    {
        return $this->galinheiro;
    }

    /**
     * @param mixed $galinheiro
     */
    public function setGalinheiro($galinheiro)
    {
        $this->galinheiro = $galinheiro;
    }




}