<?php

include_once __DIR__ . '/../Methods/BasicCalculations.php';
include_once __DIR__ . '/DataProviders/BasicCalculationDataProvider.php';

class BasicCalculationsTest extends PHPUnit\Framework\TestCase {

    private $calculator;

    protected function setUp() {
        $this->calculator = new BasicCalculations();
    }

    protected function tearDown() {
        $this->calculator = NULL;
    }

    /**
     * @covers       BasicCalculations::add
     * @dataProvider BasicCalculationDataProvider::addDataProvider()
     */
    public function testAdd($a, $b, $expected) {
        $result = $this->calculator->add($a, $b, $expected);
        $this->assertEquals($expected, $result, 'Adding assertion failed');
    }

    public function testIfCanBeDivided() {
        $dataProvider = BasicCalculationDataProvider::divideDataProvider();
        foreach ($dataProvider as $oneDataSet) {
            $this->assertInternalType('int', $oneDataSet[0]);
            $this->assertInternalType('int', $oneDataSet[1]);
        }
    }

    /**
     * @depends      testIfCanBeDivided
     * @dataProvider BasicCalculationDataProvider::divideDataProvider()
     * @covers       BasicCalculations::divide
     */
    public function testDivide($a, $b, $expected) {

        $result = $this->calculator->divide($a, $b);
        $this->assertEquals($expected, $result, 'Dividing assertion failed');
    }

    /**
     * @dataProvider BasicCalculationDataProvider::substractDataProvider();
     * @covers BasicCalculations::substract
     */
    public function testSubstraction($a, $b, $expected) {
        $result = $this->calculator->substract($a, $b);
        $this->assertEquals($expected, $result, 'Substraction assertion failed');
    }

    /**
     * @dataProvider BasicCalculationDataProvider::sqrtDataProvider();
     * @covers BasicCalculations::sqrt
     */
    public function testSqrt($a, $expected) {
        $result = $this->calculator->sqrt($a);
        $this->assertEquals($expected, $result, 'Sqrt assertion failed');
    }

}