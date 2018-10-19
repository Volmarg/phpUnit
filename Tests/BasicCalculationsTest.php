<?php

include_once '../Methods/BasicCalculations.php';
include_once 'DataProviders/BasicCalculationDataProvider.php';

/**
 * @group calculationTests
 */
class BasicCalculationsTest extends PHPUnit\Framework\TestCase {

    private $calculator;

    protected function setUp() {
        $this->calculator = new BasicCalculations();

    }

    protected function tearDown() {
        $this->calculator = NULL;
    }

    /**
     * @dataProvider BasicCalculationDataProvider::addDataProvider()
     */
    public function testAdd($a, $b, $expected) {
        $result = $this->calculator->add($a, $b, $expected);
        $this->assertEquals($expected, $result, 'Adding assertion failed');
    }

    /**
     * @dataProvider BasicCalculationDataProvider::divideDataProvider()
     */
    public function testIfCanBeDivided($a, $b, $expected) {

        $this->assertInternalType('int',$b);
        return (gettype($b) === 'string' ? false : compact('a', 'b', 'expected'));
    }

    /**
     * @depends      testIfCanBeDivided
     */
    public function testDivide($data) {

        $this->assertFalse($data, "Value cannot be used for division");
        $result = $this->calculator->divide($data['a'], $data['b']);
        $this->assertEquals($data['expected'], $result, 'Dividing assertion failed');
    }

    /**
     * @dataProvider BasicCalculationDataProvider::substractDataProvider();
     */
    public function testSubstraction($a, $b, $expected) {
        $result = $this->calculator->substract($a, $b);
        $this->assertEquals($expected, $result, 'Substraction assertion failed');
    }

    /**
     * @dataProvider BasicCalculationDataProvider::sqrtDataProvider();
     */
    public function testSqrt($a, $expected) {
        $result = $this->calculator->sqrt($a);
        $this->assertEquals($expected, $result, 'Sqrt assertion failed');
    }
}