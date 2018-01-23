<?php

include_once 'Calculadora.php';
include_once 'Calcular/CalcularDescuentoA.php';
include_once 'Calcular/CalcularDescuentoB.php';
include_once 'Calcular/CalcularDescuentoC.php';

class SistemaDescuentos {

    private $importe;
    private $portentaje;

    public function __construct($importe, $portentaje) {
        $this->importe = $importe;
        $this->portentaje = $portentaje;
    }

    public function descuentoA() {

        $calcular = new Calculadora(new CalcularDescuentoA($this->importe, $this->portentaje));
        print "Se ha descontado " . $calcular->execute() . "\n";
    }

    public function descuentoB() {

        $calcular = new Calculadora(new CalcularDescuentoB($this->importe));
        print "Se ha descontado " . $calcular->execute() . "\n";
    }

    public function descuentoC() {
        $calcular = new Calculadora(new CalcularDescuentoC($this->importe));
        print "Se ha descontado " . $calcular->execute() . "\n";
    }

}

$descuentoA = new SistemaDescuentos(600, 10);
$descuentoA->descuentoA();
$descuentoA->descuentoB();
$descuentoA->descuentoC();

$descuentoB = new SistemaDescuentos(100, 30);
$descuentoB->descuentoA();
$descuentoB->descuentoB();
$descuentoB->descuentoC();

$descuentoC = new SistemaDescuentos(10, 30);
$descuentoC->descuentoA();
$descuentoC->descuentoB();
$descuentoC->descuentoC();

