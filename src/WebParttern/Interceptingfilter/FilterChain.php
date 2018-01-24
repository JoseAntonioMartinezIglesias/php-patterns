<?php

namespace Webpattern\Interceptingfilter;

use Webpattern\Http\HttpRequest;
use Webpattern\Http\HttpResponse;

class FilterChain {

    private $filters;
    private $nextFilter = -1;
    private $target;
    
    public function __construct(Target $target) {
        $this->target = $target;
    }
    
    public function addFilter(Filter $filter) {
        $this->filters[] = $filter;
    }

    public function doFilter(HttpRequest $request, HttpResponse $response) {
        $this->nextFilter ++;
        if (isset($this->filters) && $this->nextFilter < count($this->filters)) {
            $this->filters[$this->nextFilter]->doFilter($request, $response, $this);
        }
    }
    public function target($request, $response) {
        $this->target->execute($request, $response);
    }

}
