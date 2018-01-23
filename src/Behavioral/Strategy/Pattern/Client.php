<?php

include_once 'Context.php';
include_once 'ConcreteStrategyA.php';
include_once 'ConcreteStrategyB.php';

class Client {

    public function exec() {
        
        //StrategyA
        $context = new Context(new ConcreteStrategyA());
        $context->execute();
        //StrategyB
        $context = new Context(new ConcreteStrategyB());
        $context->execute();
        
    }

}

$client = new Client();
$client->exec();
