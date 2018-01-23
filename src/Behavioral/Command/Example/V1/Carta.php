<?php

/**
 * Esta es la carta de un restaurante donde vienen los platos disponibles
 */

class Carta {

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

    public function getCarta() {
        return $this->platos;
    }

}
