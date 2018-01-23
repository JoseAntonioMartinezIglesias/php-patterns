<?php

include 'Strategy.php';

class ConcreteStrategyA implements Strategy {

    public function execute() {
        print "ConcreteStrategyA \n";
    }

}
