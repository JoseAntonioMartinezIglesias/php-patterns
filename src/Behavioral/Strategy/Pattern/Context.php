<?php

class Context {

    /**
     * @var Strategy
     */
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function execute() {
        print "pre-strategy \n";
        $this->strategy->execute();
        print "post-strategy \n";
    }

}
