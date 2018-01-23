<?php

namespace Behavioral\Mediator\V1;

interface MediatorInterface {
    public function sendResponse($content);
    public function makeRequest();
    public function queryDb();
}

