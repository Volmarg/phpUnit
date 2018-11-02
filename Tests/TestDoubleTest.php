<?php

include_once __DIR__ . '/../Methods/TestDouble.php';

use \PHPUnit\Framework\{TestCase as phpUnit};
#use Methods\{TestDouble};

class TestDoubleTest extends phpUnit
{
    public $testDoubleClass='';


    public function setUp() {
        $this->testDoubleClass=new TestDouble();
    }


    public function exampleStubMethod() {

        $stub = $this->createMock(TestDouble::class);

        $stub->method('setName')
            ->willReturn("The name You've setup");

        return $stub;
    }


    public function testStubMethod() {

        $stub=$this->exampleStubMethod();
        $this->assertInstanceOf('TestDouble',$stub);
        $this->assertInternalType('string',$stub->setName('123'));

    }


    public function tearDown() {
    }

}
