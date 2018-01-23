<?php

abstract class Creator {

    public function operation() {
        print "Antes del factory method \n";
        $this->factoryMethod()->write();
        print "Después del factory method \n";
    }

    protected abstract function factoryMethod();
}
