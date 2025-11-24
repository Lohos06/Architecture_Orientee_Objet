<?php 

class CompteBanquaire {

    private string $titulaire;
    private float $solde;

    public function __construct (
        string $titulaire,
        float $solde
    ) {
      $this->setTitulaire($titulaire);
      $this->setSolde($solde);
    }   

    public function setTitulaire(string $value) :self 
    {
        $this->titulaire = $value;
        return $this;
    }
    public function getTitulaire() :string 
    {
        return $this->titulaire;
    }

    public function setSolde(float $value) {
        $this->solde = $value;
        return $this;
    }
    public function getSolde() :string 
    {
        return $this->solde;
    }

    public function crediter(float $value) :self
    {
        $this->solde += $value; 
        return $this;
    }

        public function debiter(float $value) :self
    {
        $this->solde -= $value; 
        return $this;
    }

}