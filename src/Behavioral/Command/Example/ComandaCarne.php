<?php

namespace Behavioral\Command\Example;

class ComandaCarne extends Comanda {

    public function __construct(Cocinero $cocinero) {
        parent::__construct($cocinero);
    }
    
    public function execute() : void { 
        $coccion = readline("¿ Como quieres las carne ? ");
        $this->cocinero->cocinarCarne($coccion);
    }

}
