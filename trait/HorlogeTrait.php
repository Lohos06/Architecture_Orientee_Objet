<?php

trait HorlogeTrait {
  public function afficherHeure(): void
  {
    echo new DateTime();
  }
}