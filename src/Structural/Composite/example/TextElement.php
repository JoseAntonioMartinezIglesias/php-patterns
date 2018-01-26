<?php

namespace Composite;

use Composite\RenderableInterface;

class TextElement implements RenderableInterface {

    /**
     * @var string
     */
    private $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function render(): string {
        return $this->text;
    }

}
