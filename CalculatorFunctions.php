<?php

include_once 'Interfaces/CalculationMethods.php';

class CalculatorFunctions implements CalculationMethods {

    public function add(int $a, int $b): int {
        return $a + $b;
    }

    public function divide(int $a, int $b): float {
        return ($b != 0 ? $a / $b : 0);
    }

    public function substract(int $a, int $b): int {
        return $a - $b;
    }

    public function sqrt(float $a): float {
        return $a * $a;
    }
}