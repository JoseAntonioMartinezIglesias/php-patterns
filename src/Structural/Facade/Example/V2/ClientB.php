<?php

include_once 'ImpresoraFacade.php';

/**
 * Better
 */
class Client {

    public function ImprimirDocumentos() {

        $impresora = new ImpresoraFacade("texto1");
        $impresora->imprimir();

        $impresoraB = new ImpresoraFacade("texto2");
        $impresoraB->imprimir();

        $impresoraC = new ImpresoraFacade("texto3");
        $impresoraC->imprimir();
        
    }

}

$client = new Client();
$client->ImprimirDocumentos();
