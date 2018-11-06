<?php

#namespace Methods\TestDouble;

class TestDouble {
    public $name = '';
    private $dummyPrivateAttr = '';
    public $dummyPublicAttr = '';

    public function __construct($arg = null) {
        $this->setName('nejm');
        $this->getName();
        $this->dummyPublicAttr = $arg;
    }

    public function dummyMethod() {
        if ($this->dummyPublicAttr == null) {
            return '4';
        } else {
            return $this->dummyPublicAttr;
        }
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

    public function mapValues($a) {
        return 2;
    }

}