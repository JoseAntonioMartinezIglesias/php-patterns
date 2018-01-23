<?php

namespace Behavioral\Mediator\V1\SubSystem;

use Behavioral\Mediator\V1\Colleague;

class Database extends Colleague {

    public function getData(): string {
        return " I am database \n";
    }

}
