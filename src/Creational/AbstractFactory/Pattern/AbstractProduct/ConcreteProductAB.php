<?php

include_once 'AbstractProductA.php';

class ConcreteProductAB implements AbstractProductA {

    public function write() {
        print "ConcreteProductAB \n";
    }

}
