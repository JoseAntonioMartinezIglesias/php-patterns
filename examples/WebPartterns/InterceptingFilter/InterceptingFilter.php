<?php

include_once '../../../src/autoload.php';

use Webpattern\Http\HttpClientService;
use Webpattern\Interceptingfilter\FilterManager;
use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Http\HttpMethod;
use Webpattern\Http\HttpException;

/*
 * Primera peticion ....
 */
$httpClientService = new HttpClientService(new FilterManager()); // soy un nuevo cliente accediendo por un filtro

$request = new HttpRequest("public", HttpMethod::GET); // mi peticion a la parte publica
$request->addQueryParam("param", "value"); // añadidos parametros
var_dump($httpClientService->submit($request)); //Envio la peticion


$request = new HttpRequest("debug", HttpMethod::GET); // mi peticion a la parte publica
var_dump($httpClientService->submit($request)); //Envio la peticion


