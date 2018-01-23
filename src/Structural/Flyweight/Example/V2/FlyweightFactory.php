<?php

include_once 'CharacterFlyweight.php';

class FlyweightFactory implements Countable {

    /**
     * @var CharacterFlyweight[]
     */
    private $pool = [];

    public function get(string $name) {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count(): int {
        return count($this->pool);
    } 

}
