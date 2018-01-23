<?php

/**
 * Esta es la carta de un restaurante donde vienen los platos disponibles
 */

class Platos {

    /**
     * Esta es la lista de platos que hay en la carta
     * @var array
     */
    private $platos;

    public function __construct() {
        $this->platos = [
            'Arroz',
            'Carne',
            'Verduras',
        ];
    }

    public function getPlatos() {
        return $this->platos;
    }

}
