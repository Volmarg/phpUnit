<?php

#namespace Methods\TestDouble;

class TestDouble
{
    public $name = '';
    private $dummyPrivateAttr = '';
    public $dummyPublicAttr = '';

    public function __construct() {
        $this->setName('nejm');
        $this->getName();

    }

    public function dummyMethod() {
        return null;
    }

    public function setName($name_to_set) {
        $this->dummyMethod();
        $this->name = $name_to_set;
    }

    public function getName() {
        return $this->name;
    }

    public function requiresInstanceOfSelf($param) {
        if ($param instanceof TestDouble) {
            return true;
        } else {
            return false;
        }

    }

}