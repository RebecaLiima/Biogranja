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

    public function getUsuarios()
    {
        $sql = "SELECT login, nome, senha, tipo FROM tb_usuario";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addUsuario($login, $nome, $senha, $tipo)
    {
        $sql = "INSERT INTO tb_usuario (login, nome, senha, tipo) VALUES (:login, :nome, :senha, :tipo)";
        $query = $this->db->prepare($sql);
        $parameters = array(':login' => $login, ':nome' => $nome, ':senha' => $senha, ':tipo' =>$tipo);

        $query->execute($parameters);
    }


}