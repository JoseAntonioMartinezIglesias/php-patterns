<?php

include_once 'Impresora.php';

class ImpresoraFacade {

    /**
     * @var Impresora
     */
    private $impresora;

    public function __construct($texto) {

        $this->impresora = new Impresora();
        $this->impresora->setColor(true);
        $this->impresora->setHoja("A4");
        $this->impresora->setTipoDocumento("PDF");
        $this->impresora->setTexto($texto);
        
    }

    public function imprimir() {
        $this->impresora->imprimirDocumento();
    }

}
