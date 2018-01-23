<?php

include_once 'Calcular.php';

class CalcularDescuentoB implements Calcular {

    private $portentajeA = 30;
    private $portentajeB = 15;
    private $importeReferencia = 500;
    private $importe;

    public function __construct($importe) {
        $this->importe = $importe;
    }

    public function calcular() {
        
        if ($this->importe >= $this->importeReferencia) {
            return( $this->importe / 100 ) * $this->portentajeA;
        } else {
            return ( $this->importe / 100 ) * $this->portentajeB;
        }
        
    }

    public function resultado() {
        return $this->calcular();
    }

}
