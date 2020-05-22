<?php


class Galinheiro
{
    private $id;
    private $tipo;
    private $racao;
    private $galinhasPostura;
    private $galinhasCorte;

    /**
     * Galinheiro constructor.
     * @param $id
     * @param $tipo
     * @param $galinhas
     */
    public function __construct($id, $tipo, $galinhasPostura,$galinhasCorte)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->galinhasPostura = $galinhasPostura;
        $this->galinhasCorte = $galinhasCorte;
    }

    public function addGalinhasPostura($galinhas){
        array_push($this->galinhasPostura, $galinhas);
    }
    public function addGalinhasCorte($galinhas){
        array_push($this->galinhasCorte, $galinhas);
    }

    public function addGalinhaPostura($id,$tipo,$colocouOvo,$tempoOvo,$primeiraVez,$ultimaVez){
        array_push($this->galinhasPostura, new GalinhaPostura($id,$colocouOvo,$tempoOvo,$primeiraVez,$ultimaVez));
    }

    public function addGalinhaCorte($id,$tempo,$status){
        array_push($this->galinhasCorte, new GalinhaCorte($id,$tempo,$status));
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
    public function getRacao()
    {
        return $this->racao;
    }

    /**
     * @param mixed $racao
     */
    public function setRacao($racao)
    {
        $this->racao = $racao;
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
    public function getGalinhasPostura()
    {
        return $this->galinhasPostura;
    }

    /**
     * @return mixed
     */
    public function getGalinhasCorte()
    {
        return $this->galinhasCorte;
    }

    public function getGalinheiros()
    {
        $sql = "SELECT tipo, racao FROM tb_galinheiro";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addFuncionario($tipo, $racao)
    {
        $sql = "INSERT INTO tb_galinheiro (tipo, racao) VALUES (:tipo, :racao)";
        $query = $this->db->prepare($sql);
        $parameters = array(':tipo' => $tipo, ':racao' => $racao);

        $query->execute($parameters);
    }

}