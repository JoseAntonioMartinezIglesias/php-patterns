<?php
namespace Creational\AbstractFactory;

class JsonFactory extends AbstractFactory {

    public function create(array $array) : AbstractRenderJson {
        return new \Creational\AbstractFactory\Render\RenderJson($array);
    }

}
