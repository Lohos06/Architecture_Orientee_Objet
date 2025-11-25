<?php

require_once "./interfaces/EmployerInterface.php";

final class Designer implements EmployerInterface
{
    private $salaire;

    public function __construct (
        float $salaire
    ){
        $this->setSalaire($salaire);
    }

    public function setSalaire(float $value) : self
    {
        $this->salaire = $value;
        return $this;
    }

    public function travailler(){
        return "fais rond";
    }

    public function getSalaire(){
        return $this->salaire;
    }
}
