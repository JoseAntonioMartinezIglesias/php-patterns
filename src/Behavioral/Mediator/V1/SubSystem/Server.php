<?php

namespace Behavioral\Mediator\V1\SubSystem;

use Behavioral\Mediator\V1\Colleague;

class Server extends Colleague {

    public function process() {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }

}
