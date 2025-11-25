<?php

require_once "./interfaces/Promotion.php";

class ReductionFixe {
    public function appliquerPromotion($item, float $value) {
        return $item->CalculerPrixFinal() - $value;
    } 
}