<?php
/**
 * Created by PhpStorm.
 * User: volmarg
 * Date: 21.10.18
 * Time: 10:05
 */


class NonMathMethodsDataProvider
{

    public static function genRanomNumDataProvider() {
        return [
            'natural set' => [0, 50],
            'negated set' => [-10, 50],
            'floats set' => [1.32, 123.55],
            'strings set' => ['222', 567],
        ];
    }

}