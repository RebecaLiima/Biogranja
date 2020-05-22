<?php


class GalinheiroViewModel
{
    private $galinheiro;


    public function loadGalinheiro()
    {
        $this->galinheiro = new Galinheiro();
        $galinheiros = $this->galinheiro->getGalinheiros();

        return $galinheiros;
    }

    public function cadastrarGalinheiro($nome)
    {
        $galinheiro = $this->galinheiro->addGalinheiro($nome);

        return $galinheiro;
    }

}