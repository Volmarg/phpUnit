<?php

include_once __DIR__ . '/../Methods/TestDouble.php';

use \PHPUnit\Framework\{TestCase as phpUnit};

#use Methods\{TestDouble};

class TestDoubleTest extends phpUnit {
    public $testDoubleClass = '';


    public function setUp() {
        $this->testDoubleClass = new TestDouble();
    }

    public function exampleStubMethod() {

        $stub = $this->createMock(TestDouble::class);

        $stub->method('setName')
            ->willReturn("The name You've setup");

        return $stub;
    }

    public function testStubMethod() {

        $stub = $this->exampleStubMethod();
        $this->assertInstanceOf('TestDouble', $stub);
        $this->assertInternalType('string', $stub->setName('123'));

    }

    public function testMockMethod() {
        $mock = $this->createMock(TestDouble::class);
        $mock->expects($this->once())
            ->method('getName')
            ->willReturn(true);

        $this->assertTrue($mock->getName());
    }

    public function testDummyMethod() {
        $dummy = $this->createMock(TestDouble::class);

    }

    public static function dataProviderForStubMapping() {
        return [
            [1, 2, 3, 6],
            [2, 4, 6, 6],
            [3, 6, 9, 6]
        ];
    }

    /**
     * @dataProvider TestDoubleTest::dataProviderForStubMapping();
     */

    public function testStubMapping($a, $b, $c, $expected) {

        $manual_map = [
            [1, 2, 3, 6],
            [2, 4, 6, 6],
            [3, 6, 9, 6]
        ];

        $stub = $this->createMock(TestDouble::class);
        $stub->method('mapValues')
            ->willReturnMap($manual_map);

        $result=$stub->mapValues($a,$b,$c);
        $this->assertEquals(6, $result);
    }

    public function tearDown() {
    }

}
