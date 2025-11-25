<?php

trait HistoriqueTrait {

    private $HistoriquePrix = [];

    public function ajouterHistorique($prix) : void
    {
        $this->HistoriquePrix[] = $prix;
    }

    public function afficherHistorique()
    {
        return $this->HistoriquePrix;
    }
}