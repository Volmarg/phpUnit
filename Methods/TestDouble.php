<?php

#namespace Methods\TestDouble;

class TestDouble
{
    public $name = '';

    public function __construct() {
    }

    public function setName($name_to_set){
        $this->name=$name_to_set;
    }
}