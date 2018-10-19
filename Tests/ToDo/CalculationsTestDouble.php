<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 17.10.2018
 * Time: 19:18
 */


include_once 'BasicCalculationDataProvider.php';

class CalculationsTestDouble extends PHPUnit\Framework\TestCase {

    public function testCeilStub() {

        #This creates pseudo class BasicCalculations?
        $mock = $this->getMockBuilder('BasicCalculations')
            ->setMethods(['isCeilable'])
            ->getMock();

        $mock->test = 'wartosc'; //adding attributes
        $mock->test2 = 'wartosc';

        # This configures pseudoClass?
        $mock->expects($this->once())
            ->method('isCeilable')
            ->will($this->returnValue(true));

        #This calls the method mocked above?

        $this->assertEquals(true, $mock->isCeilable(false), 'testDouble failed');
    }

}