<?php

include_once 'Calcular.php';

class CalcularDescuentoC implements Calcular {

    private $descuento = 20;
    private $importe_referencia = 100;
    private $importe;

    public function __construct($importe) {
        $this->importe = $importe;
    }

    public function calcular() {
        if ($this->importe >= $this->importe_referencia) {
            return ( $this->importe - $this->importe_referencia );
        }
        return $this->importe;
    }

    public function resultado() {
        return $this->calcular();
    }

}
