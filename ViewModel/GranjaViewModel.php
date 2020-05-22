<?php


class GranjaViewModel
{
    private $granja;

    public function loadGranjas()
    {
        $this->granja = new Granja();
        $granjas = $this->granja->getGranjas();

        return $granjas;
    }

    public function cadastrarGranja($nome)
    {
        $granja = $this->usuario->addGranja($nome);

        return $granja;
    }

}