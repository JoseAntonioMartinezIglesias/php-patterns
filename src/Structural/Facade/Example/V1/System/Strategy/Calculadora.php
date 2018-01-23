<?php

class Calculadora {

    /**
     * @var Calcular
     */
    private $calcular;

    public function __construct(Calcular $calcular) {
        $this->calcular = $calcular;
    }

    public function execute() {
        return $this->calcular->resultado();
    }

}
