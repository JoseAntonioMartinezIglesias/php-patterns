<?php

namespace Behavioral\Command\Example;

class Camarero {

    public function execute(Comanda $comanda) : void {
        $comanda->execute();
    }

}
