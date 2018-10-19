<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Methods/BasicCalculations.php';

$calculator = new BasicCalculations();

$sum = $calculator->add(2, 5);

echo $sum;