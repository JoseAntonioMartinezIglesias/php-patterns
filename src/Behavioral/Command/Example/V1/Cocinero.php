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
        print "Voy a preraprar verduras \n";
        print "Voy a seguir la receta ... \n";
        var_dump($this->receta);
        
    }

    function cocinarCarne($coccion = null) {
        print "Voy a preraprar carne \n";
        print "La carne la quieres, " .$coccion . "\n";
    }

    function cocinarArroz() {
        print "Voy a preraprar arroz \n";
    }

}
