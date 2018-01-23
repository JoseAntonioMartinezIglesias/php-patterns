<?php

include_once 'ConcreteFactoryA.php';
include_once 'ConcreteFactoryB.php';

$abstractFactoryA = new ConcreteFactoryA();
$abstractFactoryA->createProductA()->write();
$abstractFactoryA->createProductB()->write();

$abstractFactoryB = new ConcreteFactoryB();
$abstractFactoryB->createProductA()->write();
$abstractFactoryB->createProductB()->write();

