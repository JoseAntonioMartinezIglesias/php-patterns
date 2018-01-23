<?php
namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;

class DebugFilter extends Filter {

    public function doFilter(HttpRequest $request, HttpResponse $response, FilterChain $filterChain) {
        //PRE-PROCESS
        error_log("Debuging pre-process... \n", 3, 'access.log');
        $filterChain->doFilter($request, $response);
        //POST-PROCESS
        error_log("Debuging post-process... \n", 3, 'access.log');
    }

}
