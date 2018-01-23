<?php

namespace Prototype\BookPrototype;

abstract class BookPrototype {

    protected $title;
    protected $theme;

    abstract function __clone();

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function getTheme() {
        return $this->theme;
    }

}
