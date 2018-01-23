<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Interceptingfilter\FilterChain;

class TimeFilter extends Filter {

    public function doFilter(HttpRequest $request, HttpResponse $response, FilterChain $filterChain) {
        // PRE-PROCESS
        $requestTime = time();
        error_log("Time pre-process: " . date("Y-m-d h:m:s") . "\n", 3, 'access.log');

        $filterChain->doFilter($request, $response);

        // POST-PROCESS
        $time = (time() - $requestTime) . "ms";
        error_log("Time post-process: " . $time . "\n", 3, 'access.log');
        $response->addHeaderParam("time", $time);
    }

}
