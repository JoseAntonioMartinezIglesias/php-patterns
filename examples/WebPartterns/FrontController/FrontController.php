<?php

include_once '../../../src/autoload.php';

use Webpattern\Http\HttpClientService;
use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\HttpMethod;
use Webpattern\Http\HttpException;
use Webpattern\FrontController\Dispatcher;

$httpClientService = new HttpClientService(new Dispatcher());

$request = new HttpRequest("path1", HttpMethod::GET);
$request->addQueryParam("param", "value");
$request->addQueryParam("param2", "2");
$response = $httpClientService->submit($request);
var_dump($response);


$request = new HttpRequest("path1", HttpMethod::PUT);
$response = $httpClientService->submit($request);
var_dump($response);

$request = new HttpRequest("path1", HttpMethod::POST);
$response = $httpClientService->submit($request);
var_dump($response);

$request = new HttpRequest("path4", HttpMethod::GET);
$response = $httpClientService->submit($request);
var_dump($response);





