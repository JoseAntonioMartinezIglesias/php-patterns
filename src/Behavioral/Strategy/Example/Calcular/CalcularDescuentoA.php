<?php

include_once 'Calcular.php';

class CalcularDescuentoA implements Calcular {

    private $portentaje;
    private $importe;

    public function __construct($importe, $portentaje) {
        $this->portentaje = $portentaje;
        $this->importe = $importe;
    }

    public function calcular() {
        return ( $this->importe / 100 ) * $this->portentaje;
    }

    public function resultado() {
        return $this->calcular() ;
    }

}
