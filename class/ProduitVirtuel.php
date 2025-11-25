<?php

require_once "AbstractProduit.php";

class ProduitVirtuel extends AbstractProduit {
  private $fichier;

  public function __construct(
    string $nom,
    float $prix,
    string $fichier
  ){
    parent::__construct($nom, $prix);
    $this->setFichier($fichier);
  }

  public function CalculerPrixFinal() : float {
    return $this->prix;
  }
 
 
  public function setFichier(string $value): self
  { $this->fichier = $value;
    return $this; }
  public function getFichier(): string
  { return $this->fichier; }
}