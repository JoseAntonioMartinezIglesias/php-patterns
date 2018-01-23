<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Webpattern\Http\HttpClientService;
use Webpattern\Interceptingfilter\FilterManager;
use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\HttpMethod;
use Webpattern\Http\HttpException;

class InterceptingFilterTest extends TestCase {

    public function testPublicPathTest() {
        $httpClientService = new HttpClientService(new FilterManager()); // soy un nuevo cliente accediendo por un filtro
        $request = new HttpRequest("public", HttpMethod::GET); // mi peticion a la parte publica
        $request->addQueryParam("param", "value"); // añadidos parametros
        $response = $httpClientService->submit($request);
        $this->assertNotEmpty($request);
        $this->assertEquals("HTTP/1.1 200", $response->toString());
    }

    public function testPublicDebugPathTest() {
        $httpClientService = new HttpClientService(new FilterManager()); // soy un nuevo cliente accediendo por un filtro
        $request = new HttpRequest("public/debug", HttpMethod::GET);
        $request->addQueryParam("param", "value");
        $response = $httpClientService->submit($request);
        $this->assertEquals("HTTP/1.1 403", $response->toString());
    }

}
