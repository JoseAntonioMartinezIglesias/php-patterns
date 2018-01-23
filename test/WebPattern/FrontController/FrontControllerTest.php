<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Webpattern\Http\HttpClientService;
use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\HttpMethod;
use Webpattern\Http\HttpException;
use Webpattern\FrontController\Dispatcher;

class FrontControllerTest extends TestCase {

    public function testRequestPathOne() {
        
        $httpClientService = new HttpClientService(new Dispatcher());
        $request = new HttpRequest("path1", HttpMethod::GET);
        $request->addQueryParam("param", "value");
        $request->addQueryParam("param2", "2");
        $response = $httpClientService->submit($request);
        $this->assertEquals("HTTP/1.1 200", $response->toString());
        
    }

}
