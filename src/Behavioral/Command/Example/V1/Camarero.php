<?php

include_once 'Comanda.php';
/**
 * La responsabilidad del camarero es coger el pedido y pasarle la comanda 
 * correspondiente al cocinero
 */
class Camarero {

    public function execute(Comanda $comanda) {
        $comanda->execute();
    }

}
