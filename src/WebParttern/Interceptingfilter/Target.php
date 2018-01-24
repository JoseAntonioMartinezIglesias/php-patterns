<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\HttpStatus;

class Target {

    public function execute(HttpRequest $request, HttpResponse $response) {
        if ($response->getStatus() == HttpStatus::FORBIDDEN) {
            $response->setBody($response->getStatus());
            error_log("---------> Executing Foriben Access <--------- \n", 3, 'access.log');
        } else {
            $response->setBody($response->getStatus());
            error_log("---------> Executing Permitied Access, continue <--------- \n", 3, 'access.log');
        }
    }

}
