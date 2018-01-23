<?php

include_once 'FormatterInterface.php';

class PlainTextFormatter implements FormatterInterface {

    public function format(string $text) {
        return $text;
    }

}
