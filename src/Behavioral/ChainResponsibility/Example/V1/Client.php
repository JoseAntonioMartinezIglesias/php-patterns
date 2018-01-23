<?php

include_once 'Coronel.php';
include_once 'Soldado.php';

$smith = new Coronel("Smith", "");
$truman = new Coronel("Truman", "Tomar posición enemiga \n");

$ryan = new Soldado("Ryan");
$rambo = new Soldado("Rambo");

print $rambo->orden();    // rambo ->

$rambo->establecerMando($truman);
print $rambo->orden();    // rambo -> truman -> orden()

$ryan->establecerMando($rambo);
print $ryan->orden();     // ryan -> rambo -> truman -> orden()
