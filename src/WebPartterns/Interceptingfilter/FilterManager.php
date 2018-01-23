<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\Server;
use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;

class FilterManager implements Server {
    
    public function execute(HttpRequest $request, HttpResponse $response) {

        $filterChain = new FilterChain(new Target());
        $filterChain->addFilter(new AuthenticationFilter());

        if ("public" == $request->getPath()) {
            $filterChain->addFilter(new TimeFilter());
        }
        if ("debug" == $request->getPath()) {
            $filterChain->addFilter(new DebugFilter());
        }
        $filterChain->doFilter($request, $response);
        $filterChain->target($request, $response);
    }

    public function submit(HttpRequest $request) {
        $response = new HttpResponse();
        $this->execute($request, $response);
        return $response;
    }

}
