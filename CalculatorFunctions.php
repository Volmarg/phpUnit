<?php

include_once 'Interfaces/CalculationMethods.php';

class CalculatorFunctions implements CalculationMethods
{

    public function add($a, $b) {
        return $a + $b;
    }

    public function divide($a, $b) {
        return ($b != 0 ? $a / $b : 0);
    }

}