<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 18.10.2018
 * Time: 21:06
 */

use PHPUnit\Framework\TestCase as phpUnit;

include_once '../Methods/DataDisplaying.php';


class DataDisplayingTest extends phpUnit {

    /**
     * @beforeClass
     */
    public static function beforeClassMethod(){
      echo __CLASS__;
      //die stops all tests so this works
    }


    private $data_display;

    public function setUp() {

        $this->data_display = new DataDisplaying();

    }

    public function tearDown() {

        $this->data_display = NULL;
    }

    public function testDisplaying() {
        $float_val = 2.54;
        $result = $this->data_display->displayResult($float_val);

        $this->assertStringStartsWith('Your result is: ', $result);
    }

    public function testClearResult() {
        $result = $this->data_display->clearResult();
        $this->assertFalse($result);
    }


    /**
     * @afterClass
     */
    public static function afterClassMethod() {
        fwrite(STDERR, 'All test cases for Data Displaying have been run.');

    }


}