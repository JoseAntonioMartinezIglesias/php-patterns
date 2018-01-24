<?php
namespace Creational\AbstractFactory\Render;

use Creational\AbstractFactory\Render\AbstractRender\AbstractRenderHTML;

class RenderH1Heading extends AbstractRenderHTML {

    public function render() {
        return '<p>' . $this->text . '</p>';
    }

}
