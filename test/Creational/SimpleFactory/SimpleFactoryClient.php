<?php

use Creational\SimpleFactory\SimpleFactory;

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Madrid');

