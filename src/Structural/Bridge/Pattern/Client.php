<?php

include_once 'AbstraccionRefinada.php';
include_once 'ImplementacionA.php';
include_once 'ImplementacionB.php';

$abstracciones[] = new AbstraccionRefinada(new ImplementacionA());
$abstracciones[] = new AbstraccionRefinada(new ImplementacionB());

foreach ($abstracciones as $abstraccion) {
    $abstraccion->operacion();
}

