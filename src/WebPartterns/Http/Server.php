<?php

namespace Webpattern\Http;

interface Server {
    function submit(HttpRequest $request);
}
