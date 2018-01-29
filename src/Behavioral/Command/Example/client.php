<?php

namespace Behavioral\Command\Example;

include_once '../../autoload.php';

$camarero = new Camarero();

//Pedir Arroz
$camarero->execute(new ComandaArroz(new Cocinero()));
//Pedir Carne
$camarero->execute(new ComandaCarne(new Cocinero()));
//Pedir verduras
$camarero->execute(new ComandaVerduras(new Cocinero()));
