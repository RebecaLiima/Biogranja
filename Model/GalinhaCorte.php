<?php


class GalinhaCorte
{
    private $id;
    //sugestão: padrão de tempo fixo, ex: meses;
    private $tempoNoGalinheiro; //Como a regra de negócio relacionado ao abate está na quantidade de ração do galinheiro, basta saber o tempo que a galinha tem consumido a ração para saber se ela está pronta ou não para o abate
    private $status; //"pronto para o abate", ou "não pronto para o abate"

    /**
     * GalinhaCorte constructor.
     * @param $id
     * @param $tempoNoGalinheiro
     * @param $status
     */
    public function __construct($id, $tempoNoGalinheiro, $status)
    {
        $this->id = $id;
        $this->tempoNoGalinheiro = $tempoNoGalinheiro;
        $this->status = $status;
    }

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



}