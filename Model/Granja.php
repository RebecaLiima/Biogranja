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
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    //Cria um funcionario e o insere na lista
    public function addFuncionario($nome,$cargo){
        array_push($funcionarios, new Funcionario($nome,$cargo));
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

    public function getGranjas()
    {
        $sql = "SELECT login, nome, senha, tipo FROM tb_granja";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addGranja($nome)
    {
        $sql = "INSERT INTO tb_granja (nome) VALUES (:nome)";
        $query = $this->db->prepare($sql);
        $parameters = array(':nome' => $nome,);

        $query->execute($parameters);
    }

    public function getGranja($nome)
    {
        $sql = "SELECT id, nome FROM tb_granja WHERE nome = :nome";
        $query = $this->db->prepare($sql);
        $parameters = array(':nome' => $nome);

        // útil para debugar: você pode ver o SQL atrás da construção usando:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() é o método do PDO que recebe exatamente um registro
        return ($query->rowcount() ? $query->fetch() : false);
    }

}