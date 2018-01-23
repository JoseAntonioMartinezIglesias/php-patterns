<?php
namespace Webpattern\Http;

class HttpBase {

    private $headerParams;
    private $cookies;
    private $body;

    public function getCookies(): array {
        return $cookies;
    }

    public function addCookie(string $key, string $value): void {
        $this->cookies[] = array($key, $value);
    }

    public function getHeaderParams(): array {
        return $headerParams;
    }

    public function addHeaderParam(string $key, string $value): void {
        $headerParams[] = array($key, $value);
    }

    public function getBody(): string {
        return $this->body;
    }

    public function setBody(string $body): void {
        $this->body = $body;
    }

    public function toString(): string {
        
        $stringBuilder = '';

        if ($this->headerParams != null) {
            $stringBuilder .= "  headerParams=" . $this->headerParams;
        }
        if ($this->cookies != null) {
            $stringBuilder .= ", cookies=" . cookies;
        }
        if ($this->body != null) {
            $stringBuilder .= ", body=" . body;
        }
        return $stringBuilder;
    }

}
