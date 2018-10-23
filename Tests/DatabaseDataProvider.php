<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 22.10.2018
 * Time: 06:46
 */

include_once '../vendor/autoload.php';
include_once '../Methods/SQLite.php';
include_once '../Methods/BasicCalculations.php';

use \PHPUnit\Framework\TestCase as phpUnit;

class DatabaseDataProvider extends phpUnit {

    private $db_add_data_provider = [];
    private $basic_calculations;

    public static function setUpBeforeClass() {

        $sqlite = new SQLite();
        return $sqlite;
    }

    public function setUp() {

        $db_add_data_provider = [];
        $sqlite = self::setUpBeforeClass();
        $result = $sqlite->query('SELECT * FROM addDataProvider');

        while ($row = $result->fetchArray()) {
            array_push($db_add_data_provider, array($row['value1'], $row['value2'], $row['expected']));
        }

        $this->db_add_data_provider = $db_add_data_provider;
        $this->basic_calculations = new BasicCalculations();

    }

    public function testAddingWithDatabaseData() {
        foreach ($this->db_add_data_provider as $one_data_set) {
            $result = $this->basic_calculations->add($one_data_set[0], $one_data_set[1]);
            $this->assertEquals($one_data_set[2], $result);
        }
    }


    public function tearDown() {

    }

    public static function tearDownAfterClass() {

    }


    protected function onNotSuccessfulTest(Throwable $e) {
        throw $e;
    }

    public function onSuccessfulTest() {
        fwrite(STDOUT, 'All tests from ' . __CLASS__ . ' has been finished successfully');
    }


}