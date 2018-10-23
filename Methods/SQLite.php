<?php
/**
 * Created by PhpStorm.
 * User: Volmarg Reiso
 * Date: 23.10.2018
 * Time: 05:12
 */

include_once '../.config.php';


class SQLite extends SQLite3 {

    public $path_to_file;

    function __construct() {
        $this->path_to_file = '../Database/' . Config::$FILE;
        $this->openFile();

    }

    private function openFile() {
        try {
            if (file_exists($this->path_to_file)) {
                $this->open($this->path_to_file);
            } else {
                throw new Exception('File: ' . Config::$FILE . ' was not found under given location');
            }
        } catch (Exception $e) {
            echo $e->getMessage;
        }

    }

}