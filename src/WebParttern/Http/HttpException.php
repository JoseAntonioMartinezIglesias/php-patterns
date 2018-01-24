<?php

namespace Webpattern\Http;

class HttpException extends \Exception {
    
    const serialVersionUID = 7408093310374440283;

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}
