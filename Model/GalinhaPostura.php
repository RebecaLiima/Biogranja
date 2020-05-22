<?php


class GalinhaPostura
{

    private $colocouOvo;
    private $tempoOvo;
    private $primeiraVez;
    private $ultimaVez;

    /**
     * Galinha constructor.
     * @param $colocouOvo
     * @param $tempoOvo
     * @param $primeiraVez
     * @param $ultimaVez
     */
    public function __construct($id, $colocouOvo, $tempoOvo, $primeiraVez, $ultimaVez)
    {
        $this->id = $id;
        $this->colocouOvo = $colocouOvo;
        $this->tempoOvo = $tempoOvo;
        $this->primeiraVez = $primeiraVez;
        $this->ultimaVez = $ultimaVez;
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
    public function getColocouOvo()
    {
        return $this->colocouOvo;
    }

    /**
     * @param mixed $colocouOvo
     */
    public function setColocouOvo($colocouOvo)
    {
        $this->colocouOvo = $colocouOvo;
    }

    /**
     * @return mixed
     */
    public function getTempoOvo()
    {
        return $this->tempoOvo;
    }

    /**
     * @param mixed $tempoOvo
     */
    public function setTempoOvo($tempoOvo)
    {
        $this->tempoOvo = $tempoOvo;
    }

    /**
     * @return mixed
     */
    public function getPrimeiraVez()
    {
        return $this->primeiraVez;
    }

    /**
     * @param mixed $primeiraVez
     */
    public function setPrimeiraVez($primeiraVez)
    {
        $this->primeiraVez = $primeiraVez;
    }

    /**
     * @return mixed
     */
    public function getUltimaVez()
    {
        return $this->ultimaVez;
    }

    /**
     * @param mixed $ultimaVez
     */
    public function setUltimaVez($ultimaVez)
    {
        $this->ultimaVez = $ultimaVez;
    }

    public function getGalinhasdePostura()
    {
        $sql = "SELECT colocouOvo, tempoOvo, primeiraVez, ultimaVez, galinheiro FROM tb_galinhaPostura";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addGalinhasdePostura($colocouOvo, $tempoOvo, $primeiraVez, $ultimaVez, $galinheiro)
    {
        $sql = "INSERT INTO tb_galinheiro (colocouOvo, tempoOvo, primeiraVez, ultimaVez, galinheiro) VALUES (:colocouOvo, :tempoOvo, :primeiraVez, :ultimaVez, :galinheiro)";
        $query = $this->db->prepare($sql);
        $parameters = array(':colocouOvo' => $colocouOvo, ':tempoOvo' => $tempoOvo, ':primeiraVez' => $primeiraVez, ':ultimaVez' => $ultimaVez, 'galinheiro' => $galinheiro);

        $query->execute($parameters);
    }


}