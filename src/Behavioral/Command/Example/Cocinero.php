<?php

namespace Behavioral\Command\Example;


class Cocinero {

    function cocinarVerduras() :void {
        
        print "Voy a preraprar verduras \n";
        print "Voy a seguir la receta ... \n";
          
    }

    function cocinarCarne(string $coccion = 'Al punto') : void {
        
        print "Voy a preraprar carne \n";
        print "La carne la quieres, " . $coccion . "\n";
        
    }

    function cocinarArroz() : void {
        
        print "Voy a preparar arroz \n";
        
    }

}
