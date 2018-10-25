<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 17.10.2018
 * Time: 06:20
 */

class BasicCalculationDataProvider {

    static function addDataProvider() {
        return array(
            array(1, 2, 3),
            array(4, 9, 13),
            array(55, 22, 77),
        );
    }

    static function divideDataProvider() {
        return array(
            array(0, 0, 0),
            array(1, 0, 0),
            array(1, 0, 0),
            array(2, 4, 0.5),
            array(5, 2, 2.5),
            array(6, 3, 2),
            array(4, -1, -4)
        );


    }

    static function substractDataProvider() {
        return array(
            array(0, 0, 0),
            array(1, 1, 0),
            array(-1, 2, -3),
            array(2, 1, 1),
            array(-1, -2, 1),
        );
    }

    static function sqrtDataProvider() {
        return array(
            array(2, 4),
            array(0, 0),
            array(1, 1),
            array(1.2, 1.44),
            array(-2, 4),
        );
    }
}