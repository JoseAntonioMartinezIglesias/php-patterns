<?php

include_once 'FlyweightInterface.php';

class CharacterFlyweight implements FlyweightInterface {

    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function render(string $font): string {
        return sprintf('Character %s with font %s', $this->name, $font . "\n");
    }

}
