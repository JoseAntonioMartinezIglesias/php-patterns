<?php

namespace Webpattern\Http;

/**
 * Client
 */
class HttpClientService {

    /**
     * @var Server 
     */
    private $server;

    public function __construct(Server $server) {
        $this->server = $server;
    }

    public function submit(HttpRequest $request) {
        $response = $this->server->submit($request);
        if ($response->getStatus() == 500) {
            throw new HttpException('Ocurrio un error grave', 500);
        } else {
            return $response;
        }
    }

}
