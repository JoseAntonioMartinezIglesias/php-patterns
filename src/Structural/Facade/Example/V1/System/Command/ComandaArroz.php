<?php

include_once 'Comanda.php';
/*
 * La responsabiliad de las comadas es crear un objeto que le dice al 
 * receptor que debe hacer.
 * Son como las comandas de un restaurante por ej :
 * Arroz Caldoso, el cocinero sabe que tiene que hacer arroz caldoso
 * 
 */
class ComandaArroz extends Comanda {

    public function __construct(Cocinero $cocinero) {
        parent::__construct($cocinero);
    }

    public function execute() { //:void
        $this->cocinero->cocinarArroz();
    }

}
