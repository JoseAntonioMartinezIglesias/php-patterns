<?php

include_once 'Calculadora.php';
include_once 'Calcular/CalcularDescuentoA.php';
include_once 'Calcular/CalcularDescuentoB.php';
include_once 'Calcular/CalcularDescuentoC.php';

class SistemaDescuentos {

    private $importe;
    private $portentaje;

    public function descuento(Calcular $calcular) {

        $calculadora = new Calculadora($calcular);
        print "Se ha descontado " . $calculadora->execute() . "\n";
        
    }



}

$descuento = new SistemaDescuentos();
$descuento->descuento(new CalcularDescuentoA(600, 10));
$descuento->descuento(new CalcularDescuentoB(600, 10));
$descuento->descuento(new CalcularDescuentoC(600, 10));
print "Nuevo calculo \n";
$descuento->descuento(new CalcularDescuentoA(60, 10));
$descuento->descuento(new CalcularDescuentoB(60, 10));
$descuento->descuento(new CalcularDescuentoC(60, 10));


