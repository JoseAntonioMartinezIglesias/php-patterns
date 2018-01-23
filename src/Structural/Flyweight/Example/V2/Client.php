<?php

include_once 'FlyweightFactory.php';

$characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
    'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];


$factory = new FlyweightFactory();

foreach ($characters as $char) {
    foreach ($fonts as $font) {
        $flyweight = $factory->get($char);
        print $flyweight->render($font);
    }
}

print "Character total count " . $factory->count() . "\n";


    