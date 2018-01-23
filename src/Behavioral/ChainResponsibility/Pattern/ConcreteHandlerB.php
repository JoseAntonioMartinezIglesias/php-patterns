<?php

include_once 'Handler.php';

class ConcreteHandlerB extends Handler {

    public function ConcreteHandlerB() {
        parent::__construct(null);
    }

    public function handlerRequest() {
        print "Decide ConcreteHandlerB";
    }

}
