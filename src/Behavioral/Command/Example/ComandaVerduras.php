<?php

namespace Behavioral\Command\Example;

class ComandaVerduras extends Comanda {

    private $receta;

    public function __construct(Cocinero $cocinero) {
        parent::__construct($cocinero);
    }

    public function execute()  :void { 
        $this->cocinero->cocinarVerduras();
    }

}
