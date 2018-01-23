<?php

namespace Behavioral\Mediator\V1;

abstract class Colleague {

    protected $mediator;

    public function setMediator(MediatorInterface $mediator) {
        $this->mediator = $mediator;
    }

}
