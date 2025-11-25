<?php

require_once "AbstractProduit.php";

class ProduitPhysique extends AbstractProduit {
  private $poids;
  const FRAITLIVRAISON = 2;

  public function __construct(
    string $nom,
    float $prix,
    float $poids
  ){
    parent::__construct($nom, $prix);
    $this->setPoids($poids);
  }

  public function CalculerPrixFinal() : float {
    return $this->prix + self::FRAITLIVRAISON;
  }
 
  public function setPoids(float $value): self
  { $this->poids = $value;
    return $this; }
  public function getPoids(): float
  { return $this->poids; }
}