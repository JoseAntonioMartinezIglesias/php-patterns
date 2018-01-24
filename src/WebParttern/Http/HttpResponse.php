<?php

namespace Webpattern\Http;

class HttpResponse extends HttpBase {

    /**
     * @var HttpStatus 
     */
    private $status;

    public function __construct() {
        $this->status = HttpStatus::OK;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function toString() : string {
        return "HTTP/1.1 " . $this->getStatus();
    }

}
