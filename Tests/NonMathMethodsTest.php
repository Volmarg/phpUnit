<?php
/**
 * Created by PhpStorm.
 * User: volmarg
 * Date: 21.10.18
 * Time: 10:00
 */

include_once '../Methods/NonMathMethods.php';
include_once 'DataProviders/NonMathMethodsDataProvider.php';

use \PHPUnit\Framework\TestCase as phpUnit;
use \Methods\NonMathMethods as nonMath;

class NonMathMethodsTest extends phpUnit {

    private $non_math;

    public function setUp() {
        $this->non_math = new nonMath\NonMathMethods();
    }

    public function tearDown() {

    }

    /**
     * @dataProvider NonMathMethodsDataProvider::genRanomNumDataProvider();
     */


    public function testGenRandomNum($min, $max) {
        $result = $this->non_math->genRandomNum($min, $max);
        $this->assertInternalType('int', $result);
        $this->assertGreaterThanOrEqual($min, $result);
        $this->assertLessThanOrEqual($max, $result);
    }

}