<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 18.10.2018
 * Time: 18:08
 */

include_once '../Interfaces/DataDisplayingInterface.php';

class DataDisplaying implements DataDisplayingInterface
{

    public function displayResult(float $result): string {
        $text = 'Your result is: ';
        return $text . $result;
    }

    public function clearResult(): bool {

        return false;
    }

}