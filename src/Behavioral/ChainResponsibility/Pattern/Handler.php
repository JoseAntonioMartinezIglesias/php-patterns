<?php

abstract class Handler {

    /**
     * @var Handler
     */
    protected $nextHandler;

    protected function __construct($nextHandler) {
        $this->nextHandler = $nextHandler;
    }

    abstract function handlerRequest();
}
