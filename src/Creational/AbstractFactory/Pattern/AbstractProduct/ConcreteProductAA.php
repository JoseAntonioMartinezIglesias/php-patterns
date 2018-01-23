<?php

include_once 'AbstractProductA.php';

class ConcreteProductAA implements AbstractProductA {

    public function write() {
        print "ConcreteProductAA \n";
    }

}
