<?php

include_once 'Impresora.php';

/**
 * Bad
 */
class Client {
            
    public function ImprimirDocumentos() {

        $impresora = new Impresora();
        $impresora->setHoja("A4");
        $impresora->setColor(true);
        $impresora->setTipoDocumento("pdf");
        $impresora->setTexto("texto 1");
        $impresora->imprimirDocumento();

        $impresoraB = new Impresora();
        $impresoraB->setHoja("A3");
        $impresoraB->setColor(true);
        $impresoraB->setTipoDocumento("excel");
        $impresoraB->setTexto("texto 2");
        $impresoraB->imprimirDocumento();
    }
    
}

$client = new Client();
$client->ImprimirDocumentos();
