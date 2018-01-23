<?php

include_once 'ConcreteHandlerA.php';
include_once 'ConcreteHandlerB.php';

$handler = new ConcreteHandlerA(new ConcreteHandlerA(new ConcreteHandlerB()));

$handler->handlerRequest();

