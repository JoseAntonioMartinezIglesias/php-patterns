<?php

namespace Creational\AbstractFactory\Render;

abstract class AbstractRenderJson {

    private $array;

    public function __construct(array $array) {
        $this->array = $array;
    }
    
    abstract public function render() : string;

}
