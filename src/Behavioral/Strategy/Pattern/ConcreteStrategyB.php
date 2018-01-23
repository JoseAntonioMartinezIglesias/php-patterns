<?php

include 'Strategy.php';

class ConcreteStrategyB implements Strategy {

    public function execute() {
        print "ConcreteStrategyB \n";
    }

}
