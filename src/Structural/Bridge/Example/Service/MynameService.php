<?php

include_once 'Service.php';

class MynameService extends Service {
    
    private $name; 
    
    public function get() {
        return $this->implementation->format($this->name);
    }
    public function setName(string $name) :void {
        $this->name = $name;
    }

}
