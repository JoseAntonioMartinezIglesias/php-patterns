<?php

include_once 'Command.php';

class ConcreteCommandA extends Command {

    public function __construct(Receiver $receiver) {
        parent::__construct($receiver);
    }

    /**
     * @Override
     */
    public function execute() { //:void
        $this->receiver->action1();
    }

}
