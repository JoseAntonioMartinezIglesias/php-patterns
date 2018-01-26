<?php

 class Context {
     
    /**
     * @var State
     */ 
    private $state;

    public function context(State $state) {
        $this->setState($state);
    }

    protected function setState(State $state) {
        $this->state = $state;
    }

    public function action1() : void {
        $this->state->action1($this);
    }

    public function action2() {
        $this->state->action2($this);
    }

    public function toString() : string {
        return "Context[" . $this->state . "]";
    }

}

