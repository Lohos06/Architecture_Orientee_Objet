<?php 

class ProduitPhysique extends Produit {
  // Liste des propriétés
  private $poids;

  public function __construct(
    string $nom,
    ?string $description,
    int $quantite,
    float $prix,
    float $poids
  ){
    parent::__construct($nom, $description, $quantite, $prix);
    $this->setPoids($poids);
  }
 
  // Setter et Getter
  public function setPoids(float $value): self
  {
    $this->poids = $value;
    return $this;
  }
  public function getPoids(): float
  {
    return $this->poids;
  }
}