<?php

namespace Creational\AbstractFactory\AbstractFactory;

class HTMLFactory extends AbstractFactory {

    public function create(string $content): AbstractRenderHTML {
        return new \Creational\AbstractFactory\Render\RenderH1Heading($content);
    }

}
