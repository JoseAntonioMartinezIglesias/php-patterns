<?php

namespace Creational\Prototype\BookPrototype;

class BookPrototypePHP extends BookPrototype {

    function __construct() {
        $this->theme = 'PHP';
    }

    function __clone() {
        print "BookPrototypePHP clone";
    }

}
