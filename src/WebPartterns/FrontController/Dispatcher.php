<?php

namespace Webpattern\FrontController;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\Server;
use Webpattern\Http\HttpStatus;

class Dispatcher implements Server {

    private static $PATH_ERROR = "Path Error";
    private static $INTEGER_ERROR = "Integer Error";
    private $resource1;
    private $resource2;

    public function __construct() {
        $this->resource1 = new Resource1();
        $this->resource2 = new Resource2();
    }

    private function responseError(HttpResponse $response, string $msg) {
        $response->setBody("{\"error\":\"" . $msg . "\"}");
        $response->setStatus(HttpStatus::BAD_REQUEST);
    }

    public function doGet(HttpRequest $request, HttpResponse $response) {
        switch ($request->getPath()) {
            case "path1":
                $response->setBody($this->resource1->method1("foo", "bar"));
                break;
            case "path2":
                $response->setBody($this->resource2->method1());
                break;
            default:
                $this->responseError($response, self::$PATH_ERROR);
                break;
        }
    }

    public function doPost(HttpRequest $request, HttpResponse $response) {
        switch ($request->getPath()) {
            case "path1":
                $response->setBody($this->resource1->method2());
                break;
            case "path1/sub":
                $response->setBody($this->resource1->method3());
                break;
            default:
                $this->responseError($response, self::$PATH_ERROR);
                break;
        }
    }

    public function doPut(HttpRequest $request, HttpResponse $response) {
        $this->responseError($response, self::$PATH_ERROR);
    }

    public function doPatch(HttpRequest $request, HttpResponse $response) {
        $this->responseError($response, self::$PATH_ERROR);
    }

    public function doDelete(HttpRequest $request, HttpResponse $response) {
        $this->responseError($response, self::$PATH_ERROR);
    }

    public function submit(HttpRequest $request): HttpResponse {
        $response = new HttpResponse();
        switch ($request->getMethod()) {
            case 'POST':
                $this->doPost($request, $response);
                break;
            case 'GET':
                $this->doGet($request, $response);
                break;
            case 'PUT':
                $this->doPut($request, $response);
                break;
            case 'DELETE':
                $this->doDelete($request, $response);
                break;
            default:
        }
        return $response;
    }

}
