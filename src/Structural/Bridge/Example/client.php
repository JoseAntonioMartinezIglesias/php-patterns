<?php

include_once 'Service/HelloWorldService.php';
include_once 'Service/MynameService.php';

include_once 'Formatter/H4Formatter.php';
include_once 'Formatter/PlainTextFormatter.php';
include_once 'Formatter/HtmlFormatter.php';


$serviceA = new MynameService(new H4Formatter());
$serviceA->setName('josele');
echo $serviceA->get();

$serviceB = new HelloWorldService(new PlainTextFormatter());
echo $serviceB->get();

$serviceB->setImplementation(new HtmlFormatter());
echo $serviceB->get();