<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 25.10.2018
 * Time: 06:11
 */

use PHPUnit\Framework\TestCase as phpUnit;
include_once __DIR__.'/'.'../Methods/DataDisplaying.php';
class ManualConsoleTestForBootstrap extends phpUnit {

    private $data_display;

    public function setUp() {
        $this->data_display = new DataDisplaying();
    }

    public function tearDown() {
        $this->data_display = NULL;
    }

    /**
     * @covers DataDisplaying::clearResult
     */
    public function testClearResult() {
        $result = $this->data_display->clearResult();
        $this->assertFalse($result);
    }

}