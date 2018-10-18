<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 17.10.2018
 * Time: 19:18
 */


include_once 'CalculationsDataProvivder.php';

class CalculationsTestDouble extends PHPUnit\Framework\TestCase {


    public function testCeilStub() {

        #This creates pseudo class CalculatorFunctions?
        $mock = $this->getMockBuilder('CalculatorFunctions')
            ->setMethods(['isCeilable'])
            ->getMock();

        # This configures pseudoClass?
        $mock->expects($this->any())
            ->method('isCeilable')
            ->will($this->returnValue(true));

        #This calls the method mocked above?

        $this->assertEquals(true, $mock->isCeilable(false),'testDouble failed');
    }

}