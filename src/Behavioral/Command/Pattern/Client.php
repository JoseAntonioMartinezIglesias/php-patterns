<?php

include_once 'Receiver.php';
include_once 'Invoker.php';
include_once 'ConcreteCommandA.php';
include_once 'ConcreteCommandB.php';

$invoker = new Invoker(); //Camarero
$receiver = new Receiver(); //Cocinero

$invoker->execute(new ConcreteCommandA($receiver)); //pasar comanda A a Receiver
$invoker->execute(new ConcreteCommandB($receiver)); //pasar comanda B a Receiver