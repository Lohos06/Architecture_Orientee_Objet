<?php

require_once "AbstractProduit.php";
require_once './trait/Historique.php';

class ProduitPhysique extends AbstractProduit {

  use HistoriqueTrait;

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

    $prixFinal = $this->prix + self::FRAITLIVRAISON;
    $this->ajouterHistorique($prixFinal);
    return $prixFinal;
  }
 
  public function setPoids(float $value): self
  { $this->poids = $value;
    return $this; }
  public function getPoids(): float
  { return $this->poids; }
}