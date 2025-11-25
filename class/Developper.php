<?php

require_once "./interfaces/EmployerInterface.php";

final class developper implements EmployerInterface
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
        return "tape clavier";
    }

    public function getSalaire(){
        return $this->salaire;
    }
}
