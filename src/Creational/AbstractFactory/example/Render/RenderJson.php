<?php
namespace Creational\AbstractFactory\Render;

use Creational\AbstractFactory\Render\AbstractRender\AbstractRenderJson;


class RenderJson extends AbstractRenderJson {

    public function render() {
        return json_encode(array($this->text));
    }

}
