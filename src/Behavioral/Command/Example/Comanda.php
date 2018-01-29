<?php

namespace Behavioral\Command\Example;

abstract class Comanda {

    protected $cocinero;

    protected function __construct(Cocinero $cocinero) {
        $this->cocinero = $cocinero;
    }

    public abstract function execute() : void;
    
}
