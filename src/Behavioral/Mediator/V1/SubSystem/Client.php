<?php

namespace Behavioral\Mediator\V1\SubSystem;

use Behavioral\Mediator\V1\Colleague;

class Client extends Colleague {

    public function request() {
        $this->mediator->makeRequest();
    }

    public function output(string $content) {
        echo $content;
    }

}
