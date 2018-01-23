<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;
use Webpattern\Interceptingfilter\FilterChain;

abstract class Filter {
    public abstract function doFilter(HttpRequest $request, HttpResponse $response, FilterChain $filterChain);
}
