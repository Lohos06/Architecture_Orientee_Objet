<?php

class Categorie{
  private $id;
  private $nom;
  private $description;
 
  public function getId(): int
  {
    return $this->id;
  }
  
  public function getNom(): string
  {
    return $this->nom;
  }
  
  public function getDescription(): ?string
  {
    return $this->description;
  }
}