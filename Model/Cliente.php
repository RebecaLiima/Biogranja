<?php


class Cliente
{
    private $nome;
    private $CPF;
    private $Endereco;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $CPF
     * @param $Endereco
     */
    public function __construct($nome, $CPF, $Endereco)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->Endereco = $Endereco;
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
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * @param mixed $CPF
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * @param mixed $Endereco
     */
    public function setEndereco($Endereco)
    {
        $this->Endereco = $Endereco;
    }



}