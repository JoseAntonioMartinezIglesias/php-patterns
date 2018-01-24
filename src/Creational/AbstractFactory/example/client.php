<?php

include_once '../../autoload.php';

use Creational\AbstractFactory\AbstractFactory\HTMLFactory;
use Creational\AbstractFactory\AbstractFactory\JsonFactory;


(string) $string = 'foo'; 

$html= new HTMLFactory();
var_dump($html->create($string)->render());

$json = new JsonFactory();
var_dump($json->create($string)->render());


        
 