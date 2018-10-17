<?php

include_once '../CalculatorFunctions.php';
include_once 'CalculationsDataProvivder.php';

class Calculations extends PHPUnit\Framework\TestCase {

    private $calculator;

    protected function setUp() {
        $this->calculator = new CalculatorFunctions();

    }

    protected function tearDown() {
        $this->calculator = NULL;
    }

    /**
     * @dataProvider CalculationsDataProvivder::addDataProvider()
     */

    public function testAdd($a, $b, $expected) {
        $result = $this->calculator->add($a, $b, $expected);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider CalculationsDataProvivder::divideDataProvider()
     */

    public function testDivide($a, $b, $expected) {
        $result = $this->calculator->divide($a, $b);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider CalculationsDataProvivder::substractDataProvider();
     */

    public function testSubstraction($a, $b, $expected) {
        $result = $this->calculator->substract($a, $b);
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider CalculationsDataProvivder::sqrtDataProvider();
     */
    public function testSqrt($a, $expected) {
        $result = $this->calculator->sqrt($a);
        $this->assertEquals($expected, $result);
    }
}