<?php

namespace Creational\AbstractFactory\Render\AbstractRender;

abstract class AbstractRenderJson {

    protected $text;

    public function __construct(string $text) {
        $this->text = $text;
    }
    
    abstract public function render();

}
