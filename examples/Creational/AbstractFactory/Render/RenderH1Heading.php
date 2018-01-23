<?php
namespace Creational\AbstractFactory\Render;

class RenderH1Heading extends AbstractRenderHTML {

    public function render(): string {
        return '<p>' . $this->text . '</p>';
    }

}
