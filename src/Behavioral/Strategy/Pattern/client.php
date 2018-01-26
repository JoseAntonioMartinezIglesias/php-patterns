<?php

include_once 'Context.php';
include_once 'ConcreteStrategyA.php';
include_once 'ConcreteStrategyB.php';


//StrategyA
$context = new Context(new ConcreteStrategyA());
$context->execute();
//StrategyB
$context = new Context(new ConcreteStrategyB());
$context->execute();

