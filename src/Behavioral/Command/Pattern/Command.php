<?php

abstract class Command {

    protected $receiver;

    protected function __construct(Receiver $receiver) {
        $this->receiver = $receiver;
    }

    public abstract function execute();
    
}
