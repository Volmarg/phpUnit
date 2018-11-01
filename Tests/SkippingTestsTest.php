<?php

use \PHPUnit\Framework\{TestCase as phpUnit};

class SkippingTestsTest extends phpUnit
{

    public $var = '';


    public function setUp() {
        $this->var = 1;
    }

    public function testIncomplete() {
        $this->assertTrue(true, 'Should assert true');
        $this->markTestIncomplete('Test marked as incomplete');
    }

    public function testSkip() {

        $date = new DateTime();
        $formatted_date = $date->format('Y-m-d');

        $second_date = new DateTime('2018-10-31');
        $formatted_date_second = $second_date->format('Y-m-d');

        if ($formatted_date != $formatted_date_second) {
            $this->markTestSkipped('Test skipped due to the incorrect date');
        } else {
            $this->assertCount(2, array('a', 'b'));
        }


    }


    public function tearDown() {

    }

}