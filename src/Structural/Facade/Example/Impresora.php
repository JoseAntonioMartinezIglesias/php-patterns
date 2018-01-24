<?php

class Impresora {

    /**
     * @var String
     */
    private $tipoDocumento;
    private $hoja;

    /**
     * @var Boolean
     */
    private $color;
    private $texto;

    /**
     * @return string
     */
    public function getTipoDocumento() {

        return $this->tipoDocumento;
    }

    /**
     * @param string
     */
    public function setTipoDocumento($tipoDocumento) {

        $this->tipoDocumento = $tipoDocumento;
    }

    public function setHoja($hoja) {
        $this->hoja = $hoja;
    }

    public function getHoja() {

        return $this->hoja;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {

        return $this->color;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getTexto() {

        return $this->texto;
    }

    public function imprimirDocumento() {
        
        print "Imprimiendo documento \n";
        print "Texto : " . $this->getTexto() . "\n";
        print "Hoja : " . $this->getHoja() . "\n";
        print "Tipo : " . $this->getTipoDocumento() . "\n";
        
    }

}
