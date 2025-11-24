<?php 

class Personne {
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;

  public function __construct(
    string $nom,
    string $prenom,
    string $date_naissance,
  )
  {
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setDateNaissance($date_naissance);
  }

  final public function setNom(string $value): self
  {
    $this->nom = $value;
    return $this;
  }
  public function getNom(): string
  {
    return $this->nom;
  }

  final public function setPrenom(string $value): self
  {
    $this->prenom = $value;
    return $this;
  }
  public function getPrenom(): string
  {
    return $this->prenom;
  }

    final public function setDateNaissance(string $value): self
  {
    $this->date_naissance = new DateTime($value);
    return $this;
  }
  public function getDateNaissance(): string
  {
    return $this->date_naissance;
  }

  public function getAge() : int
  {
    return $this->date_naissance->diff(new DateTime())->y;
  }
}