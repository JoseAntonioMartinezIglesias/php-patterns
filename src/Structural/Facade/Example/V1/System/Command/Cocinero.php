<?php

/*
 * El cocinero recibe las comandas y cocina los platos ...
 */

class Cocinero {

    private $receta;

    public function setReceta($receta) {
        $this->receta = $receta;
    }

    function cocinarVerduras() {
        print "Voy a preparar verduras \n";
        print " ... Voy a seguir la receta ... \n";
        var_dump($this->receta);
        
    }

    function cocinarCarne($coccion = null) {
        print "Voy a preparar la carne \n";
        print "La carne estará, " .$coccion . "\n";
    }

    function cocinarArroz() {
        print "Voy a preparar arroz \n";
    }

}
