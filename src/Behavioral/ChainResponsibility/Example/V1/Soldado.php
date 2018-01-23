<?php

include_once 'Unidad.php';

class Soldado extends Unidad {

    // el constructor sólo tiene que inicializar la parte correspondiente a la superclase

    public function Soldado(string $nombre) {
        parent::__construct($nombre);
    }

    public function toString() {
        return ("Soldado " + parent::toString());
    }

}
