<?php


class GalinhaPosturaViewModel
{
    private $galinhaPostura;

    public function loadGalinhaPostura()
    {
        $this->galinhaPostura = new GalinhaCorte();
        $galinhaPostura = $this->galinhaPostura->getGalinhasdeCorte();

        return $galinhaPostura;
    }

    public function cadastrarGalinhaPostura($colocouOvo, $tempoOvo, $primeiraVez, $ultimaVez, $galinheiro)
    {
        $galinhaPostura = $this->galinhaPostura->addGalinhaPostura($colocouOvo, $tempoOvo, $primeiraVez, $ultimaVez, $galinheiro);

        return $galinhaPostura;
    }
}