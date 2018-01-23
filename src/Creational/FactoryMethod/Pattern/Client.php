<?php

include_once 'ConcreteCreatorA.php';
include_once 'ConcreteCreatorB.php';

class Client {

    public function exec() {

        $creatorA = new ConcreteCreatorA();
        $creatorA->operation();

        $creatorB = new ConcreteCreatorB();
        $creatorB->operation();
    }

}

$client = new Client();
$client->exec();
