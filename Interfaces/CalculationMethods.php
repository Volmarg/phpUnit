<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 15.10.2018
 * Time: 21:31
 */

interface CalculationMethods {

    function add(int $a, int $b);

    function divide(int $a, int $b);

    function substract(int $a, int $b);

    function sqrt (float $a);

    function ceil(float $a);
}