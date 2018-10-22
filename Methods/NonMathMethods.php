<?php
/**
 * Created by PhpStorm.
 * User: volmarg
 * Date: 21.10.18
 * Time: 09:58
 */

namespace Methods\NonMathMethods;
include_once '../Interfaces/NonMathMethodsInterface.php';

use Interfaces\NonMathMethodsInterface as nonMathInterface;

class NonMathMethods implements nonMathInterface\NonMathMethodsInterface {

    public function genRandomNum(int $min, int $max): int {
        return ceil(rand($min, $max));
    }


}