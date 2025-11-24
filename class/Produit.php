<?php

class Produit {
  // Liste des propriétés
  private $nom;
  private $description;
  private $quantite;
  private $prix;

  public function __construct(
    string $nom,
    ?string $description,
    int $quantite,
    float $prix
  )
  {
    $this->setNom($nom);
    $this->setDescription($description);
    $this->setQuantite($quantite);
    $this->setPrix($prix);
  }
 
  // Setters et Getters
  public function setNom(string $value): self
  {
    $this->nom = $value;
    return $this;
  }
  public function getNom(): string
  {
    return $this->nom;
  }
 
  public function setDescription(?string $value): self
  {
    $this->description = $value;
    return $this;
  }
  public function getDescription(): ?string
  {
    return $this->description;
  }
 
  public function setQuantite(int $value): self
  {
    $this->quantite = $value;
    return $this;
  }
  public function getQuantite(): int
  {
    return $this->quantite;
  }
 
  public function setPrix(float $value): self
  {
    $this->prix = $value;
    return $this;
  }
  public function getPrix(): float
  {
    return $this->prix;
  }
}