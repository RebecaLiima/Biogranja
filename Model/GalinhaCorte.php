<?php


class GalinhaCorte
{
    //sugestão: padrão de tempo fixo, ex: meses;
    private $tempoNoGalinheiro; //Como a regra de negócio relacionado ao abate está na quantidade de ração do galinheiro, basta saber o tempo que a galinha tem consumido a ração para saber se ela está pronta ou não para o abate
    private $status; //"pronto para o abate", ou "não pronto para o abate"
    private $galinheiro;

    /**
     * @return mixed
     */
    public function getTempoNoGalinheiro()
    {
        return $this->tempoNoGalinheiro;
    }

    /**
     * @param mixed $tempoNoGalinheiro
     */
    public function setTempoNoGalinheiro($tempoNoGalinheiro)
    {
        $this->tempoNoGalinheiro = $tempoNoGalinheiro;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getGalinhasdeCorte()
    {
        $sql = "SELECT tempoNoGalinheiro, status, galinheiro FROM tb_galinhaCorte";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addGalinhaCorte($tempoNoGalinheiro, $status, $galinheiro)
    {
        $sql = "INSERT INTO tb_galinheiro (tempoNoGalinheiro, status, galinheiro) VALUES (:tempoNoGalinheiro, :status, :galinheiro)";
        $query = $this->db->prepare($sql);
        $parameters = array(':tempoNoGalinheiro' => $tempoNoGalinheiro, ':status' => $status, ':galinheiro' => $galinheiro);

        $query->execute($parameters);
    }

}