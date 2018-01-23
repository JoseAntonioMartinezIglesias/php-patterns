<?php
include_once '../../autoload.php';

use Creational\AbstractFactory\AbstractFactory\HTMLFactory;
use Creational\AbstractFactory\AbstractFactory\JsonFactory;

$html = new HTMLFactory();
$html->create('foobar, bar')->render(); // <p>foo, bar</p>


$json = new JsonFactory();
$json->create(['foo', 'bar'])->render(); // {}



        
 