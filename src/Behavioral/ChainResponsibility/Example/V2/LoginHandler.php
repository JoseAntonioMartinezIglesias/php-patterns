<?php

abstract class LoginHandler {

    /**
     * @var LoginHandler
     */
    protected $LoginHandler;

    protected function __construct($handler) {
        $this->LoginHandler = $handler;
    }

    abstract function handler();
    
}
