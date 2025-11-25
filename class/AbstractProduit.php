<?php

abstract class AbstractProduit {
  protected $nom;
  protected $prix;

  public function __construct(
    string $nom,
    float $prix
  )
  {
    $this->setNom($nom);
    $this->setPrix($prix);
  }

  abstract public function CalculerPrixFinal() : float;

  final public function setNom(string $value): self
  { $this->nom = $value;
    return $this; }
  public function getNom(): string
  {return $this->nom; }
 
  final public function setPrix(float $value): self
  { $this->prix = $value;
    return $this; }
  public function getPrix(): float
  { $this->ajouterHistorique($this->prix);
    return $this->prix; }


}