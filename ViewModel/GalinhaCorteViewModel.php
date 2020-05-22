<?php


class GalinhaCorteViewModel
{

    private $galinhaCorte;

    public function loadGalinhasCorte()
    {
        $this->galinhaCorte = new GalinhaCorte();
        $galinhaCorte = $this->galinhaCorte->getGalinhasdeCorte();

        return $galinhaCorte;
    }

    public function cadastrarGalinhasCorte($tempoNoGalinheiro, $status, $galinheiro)
    {
        $granja = $this->galinhaCorte->addGalinhaCorte($tempoNoGalinheiro, $status, $galinheiro);

        return $granja;
    }
}