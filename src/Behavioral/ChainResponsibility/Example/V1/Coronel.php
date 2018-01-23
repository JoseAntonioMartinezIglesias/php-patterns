<?php

include_once 'Unidad.php';

class Coronel extends Unidad {

    private $orden;

// inicializa la parte de unidad e inicializa el estado propio del Coronel (_orden)

    public function Coronel(string $nombre, string $orden) {
        parent::__construct($nombre);

        $this->orden = $orden;
    }

    /* refinamiento del servicio que utiliza la cadena de responsabilidad, resolviendo
      localmente si tiene órdenes específicas o comportándose convencionalmente en
      caso contrario */

    public function orden() {
        return ($this->orden != null ? $this->orden : parent::orden());
    }

    public function toString() {
        return ("Coronel " + parent::toString());
    }

}
