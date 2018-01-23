<?php

namespace Webpattern\FrontController;


class Resource1 {

    public function method1(string $param, string $param2) : string {
        return "{\"name\":\"Resource1:method1:" . $param . "," . $param2 . "\"}";
    }

    public function method2() : string {
        return "{\"name\":\"Resource1:method2:\"}";
    }

    public function method3() : string {
        return "{\"name\":\"Resource1:method3\"}";
    }

}

