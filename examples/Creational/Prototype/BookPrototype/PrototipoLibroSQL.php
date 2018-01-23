<?php

namespace Prototype\V1;

class PrototipoLibroSQL extends PrototipoLibro {
    function __construct() {
        $this->tema = 'SQL';
    }
    function __clone() {
        return "PrototipoLibroSQL";
    }
}
