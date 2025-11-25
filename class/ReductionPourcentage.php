<?php

require_once "./interfaces/Promotion.php";

class ReductionPourcentage {
    public function appliquerPromotion($item, float $value) {
        return $item->CalculerPrixFinal() * (1 - $value/100);
    } 
}