<?php


function exceptionThrower() {
    if (0 != 1) {
        throw new Exception('ERROR');
    }
}

try {
    exceptionThrower();
} catch (Exception $t) {
    echo '<pre>';
    echo $t->getTraceAsString();
    echo '</pre>';
} finally {
    echo '</br> This is finally statement </br>';
}


echo array(1);