<?php

include_once 'Platos.php';

/**
 * Esta clase es la encargara de mostranos de pintar la carta
 */
class Carta {

    private $platos;

    public function __construct() {
        $this->platos = new Platos();
    }

    public function mostrarCarta() {
        foreach ($this->platos->getPlatos() as $plato) {
            print "-> " . $plato . "\n";
        }
    }

}
