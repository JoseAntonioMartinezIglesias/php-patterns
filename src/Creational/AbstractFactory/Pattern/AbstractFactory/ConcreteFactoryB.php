<?php

include_once 'AbstractFactory.php';
include_once 'ConcreteProductAB.php';
include_once 'ConcreteProductBB.php';

class ConcreteFactoryB implements AbstractFactory {

    public function createProductBB() {
        return new ConcreteProductBB();
    }

    public function createProductAB() {
        return new ConcreteProductAB();
    }

}

