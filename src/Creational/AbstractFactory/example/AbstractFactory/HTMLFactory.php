<?php

namespace Creational\AbstractFactory\AbstractFactory;

class HTMLFactory extends AbstractFactory {

    public function create(string $text) {
        return new \Creational\AbstractFactory\Render\RenderH1Heading($text);
    }

}
