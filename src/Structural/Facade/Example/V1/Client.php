<?php

include_once 'System/SystemFacade.php';

class Client {
    
    private $systemFacade;
    
    public function __construct() {
        $this->systemFacade = new SystemFacade();
    }
    public function getSystem() {
        return $this->systemFacade;
    }
    
}