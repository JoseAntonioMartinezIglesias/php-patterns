<?php

namespace Creational\Prototype\BookPrototype;

class BookPrototypeSQL extends BookPrototype {

    function __construct() {
        $this->theme = 'SQL';
    }

    function __clone() {
        return "BookPrototypeSQL";
    }

}
