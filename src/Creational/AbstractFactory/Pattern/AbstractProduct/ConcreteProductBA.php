<?php

include_once 'AbstractProductB.php';

class ConcreteProductBA implements AbstractProductB {

    public function write() {
        print "ConcreteProductBA \n";
    }

}
