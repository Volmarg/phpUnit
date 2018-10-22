<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 22.10.2018
 * Time: 06:46
 */

class DatabaseDataProvider {

    public static function setUpBeforeClass() {

    }

    public function setUp() {

    }

    public function tearDown() {

    }

    public static function tearDownAfterClass() {

    }

    public function onNotSuccessfullTest() {
        echo 'One or more of tests from class ' . __CLASS__ . ' failed';

    }

    public function onSuccessfullTest() {

        echo 'All tests from ' . __CLASS__ . ' has been finished successfully';
    }


}