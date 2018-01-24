<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Interceptingfilter\FilterChain;
use Webpattern\Http\HttpStatus;

class AuthenticationFilter extends Filter {

    public function doFilter(HttpRequest $request, HttpResponse $response, FilterChain $filterChain) {
        // PRE-PROCESS
        error_log("Authenticating pre-process... \n", 3, 'access.log');
        
        if ("public" == $request->getPath()) {
            $filterChain->doFilter($request, $response);
        } else {
            error_log("Authenticating user UNAUTHORIZED access code : " . HttpStatus::UNAUTHORIZED . "\n", 3, 'access.log');
            $response->setStatus(HttpStatus::FORBIDDEN);
            $response->addHeaderParam("auth", "AuthenticationFilter");
        }
        // POST-PROCESS
        error_log("Authenticating post-process... \n", 3, 'access.log');
    }

}
