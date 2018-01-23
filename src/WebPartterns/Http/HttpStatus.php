<?php
namespace Webpattern\Http;

final class HttpStatus {

    const OK = 200;
    const CREATED = 201;
    const NO_CONTENT = 204;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const CONFLICT = 409;
    const INTERNAL_SERVER_ERROR = 500;

    private $code;

    private function __construct(string $code) {
        $this->code = $code;
    }

    protected function getCode(): int {
        return self::$this->code;
    }

    public function isError(): boolean {
        return $this->code == 500;
    }

}
