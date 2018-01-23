<?php

include_once 'Handler.php';


class ConcreteHandlerA extends Handler {

    public function ConcreteHandlerA(Handler $nextHandler) {
        parent::__construct($nextHandler);
    }

    public function handlerRequest() {
        $random = rand(0, 10);
        if ($random <= 5) {
            print "Decide ConcreteHandlerA";
        } else {
            $this->nextHandler->handlerRequest();
        }
    }

}
