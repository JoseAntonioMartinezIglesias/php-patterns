<?php
namespace Creational\AbstractFactory\AbstractFactory;

class JsonFactory extends AbstractFactory {

    public function create(string $text)  {
        return new \Creational\AbstractFactory\Render\RenderJson($text);
    }

}
