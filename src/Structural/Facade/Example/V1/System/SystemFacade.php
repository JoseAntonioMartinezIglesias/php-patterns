<?php

include_once 'Command/Command.php';
include_once 'Strategy/Strategy.php';

class SystemFacade {

    private $system;

    public function __construct() {
        $this->system['command'] = new Command();
        $this->system['strategy'] = new Strategy();
    }
    public function getSystem() {
        return $this->system;
    }

}
