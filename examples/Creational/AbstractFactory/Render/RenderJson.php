<?php
namespace Creational\AbstractFactory\Render;

class RenderJson extends AbstractRenderJson {

    public function render(): void {
        return json_encode($this->array, true);
    }

}
