<?php

namespace Behavioral\Command\Example;

class ComandaArroz extends Comanda {

    public function __construct(Cocinero $cocinero) {
        parent::__construct($cocinero);
    }

    public function execute() : void {
        $this->cocinero->cocinarArroz();
    }

}
