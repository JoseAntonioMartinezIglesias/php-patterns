<?php

namespace Composite;

use Composite\RenderableInterface;

class InputElement implements RenderableInterface {

    public function render(): string {
        return '<input type="text" />';
    }

}
