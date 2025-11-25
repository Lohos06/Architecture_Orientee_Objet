<?php

final class Entreprise
{
    private $ListeEmployer = [];

    public function addEmployer(Designer | Developper $value) : self
    {
        $this->ListeEmployer[] = $value;
        return $this;
    }

    public function getMasseSalariale() : float {

        $MasseSalariale = 0;

        foreach ($this->ListeEmployer as $Employer) {
            $MasseSalariale += $Employer->getSalaire();
        }
        return $MasseSalariale;
    }
}
