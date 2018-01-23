<?php

namespace Webpattern\Http;


class HttpRequest extends HttpBase {

    private $path;

    /**
     * @var HttpMethod
     */
    private $method;
    private $queryParams;

    public function __construct(string $path, string $method) {
        $this->path = $path;
        $this->method = $method;
    }

    public function getPath(): string {
        return $this->path;
    }

    public function paths() {
        return explode('/', $this->path);;
    }

    public function setPath(string $path) {
        $this->path = $path;
    }

    public function getMethod(): string {
        return $this->method;
    }

    public function setMethod(HttpMethod $method): void {
        $this->method = $method;
    }

    public function getParams(): array {
        return $this->queryParams;
    }

    public function addQueryParam(string $key, string $value): void {
        $this->queryParams[] = array($key, $value);
    }

    public function clearQueryParams() {
        $this->queryParams = null;
    }

    public function toString(): string {
        return $this->method . " /" . $this->path . $this->queryParams();
    }

    private function queryParams(): string {
        $query = '';
        foreach ($this->queryParams as $entry) {
            $query .= "?";
            $query .= $entry[0];
            $query .= "=";
            $query .= $entry[1];
            $query .= "&";
        }
        return $query;
    }

}
