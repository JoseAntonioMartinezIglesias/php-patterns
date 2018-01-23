<?php

include_once 'Comanda.php';

class ComandaVerduras extends Comanda {

    private $receta;

    public function __construct(Cocinero $cocinero) {
        parent::__construct($cocinero);
        $this->cocinero->setReceta(array(
            'Añadir agua',
            'Poner verduras',
            'Cocinar 20 minutos'
        ));
    }

    public function execute() { //:void
        $this->cocinero->cocinarVerduras();
    }

}
