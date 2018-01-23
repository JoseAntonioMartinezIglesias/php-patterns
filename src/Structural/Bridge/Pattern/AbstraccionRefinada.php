<?php

include_once 'Abstraccion.php';

class AbstraccionRefinada implements Abstraccion {

    /**
     * @var Implementador
     */
    private $implementador;

    public function AbstraccionRefinada(Implementador $implementador) {
        $this->implementador = $implementador;
    }

    public function operacion() {
        $this->implementador->operacion();
    }

}
