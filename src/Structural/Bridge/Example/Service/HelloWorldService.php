<?php

include_once 'Service.php';

class HelloWorldService extends Service {

    public function get() {
        return $this->implementation->format('Hello World');
    }

}
