<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'CalculatorFunctions.php';

$calculator=new CalculatorFunctions();

$sum= $calculator->add(2,5);

echo $sum;