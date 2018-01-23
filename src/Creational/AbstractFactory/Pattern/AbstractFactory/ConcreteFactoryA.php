<?php

include_once 'AbstractFactory.php';
include_once 'ConcreteProductAA.php';
include_once 'ConcreteProductBA.php';

class ConcreteFactoryA implements AbstractFactory {

    public function createProductAA() {
        return new ConcreteProductAA();
    }

    public function createProductBA() {
        return new ConcreteProductBA();
    }

}
