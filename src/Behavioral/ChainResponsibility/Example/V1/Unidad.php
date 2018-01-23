<?php

abstract class Unidad {

    /**
     * @var Unidad
     */
    private $mando;
    private $nombre;

    /* en el constructor, además de un nombre para la unidad, se inicializa la referencia
      que implementa la cadena de responsabilidad (_mando): en principio no hay sucesor */

    public function __construct(String $nombre) {
        $this->mando = null;
        $this->nombre = $nombre;
    }

    public function toString() {
        return $this->nombre;
    }

// cambia el mando de una unidad (modifica cadena de responsabilidad)

    public function establecerMando(Unidad $mando) {
        $this->mando = $mando;
    }

    /* comportamiento por defecto de la cadena: delegar en el mando directo o, si se 
      alcanza el final de la cadena, utilizar una resolución por defecto (sin orden) */

    public function orden() {
        return ($this->mando != null ? $this->mando->orden() : "Sin orden \n");
    }

}
