<?php

include_once '../Interfaces/BasicCalculationsInterface.php';

class BasicCalculations implements BasicCalculationsInterface
{

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
        return pow($a, 2);
    }

    public function ceil(float $a): int {

    }
}