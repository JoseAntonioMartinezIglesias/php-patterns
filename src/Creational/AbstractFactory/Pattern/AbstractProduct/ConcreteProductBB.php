<?php

include_once 'AbstractProductB.php';

class ConcreteProductBB implements AbstractProductB {

    public function write() {
        print "ConcreteProductBB \n";
    }

}
