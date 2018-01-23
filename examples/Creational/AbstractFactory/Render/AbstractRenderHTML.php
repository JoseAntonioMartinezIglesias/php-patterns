<?php

namespace Creational\AbstractFactory\Render;

abstract class AbstractRenderHTML {

    private $text;

    public function __construct(string $text) {
        $this->text = $text;
    }
    
    abstract public function render() : string ;

}
