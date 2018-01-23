<?php

include_once 'FormatterInterface.php';

class H4Formatter implements FormatterInterface {

    public function format(string $text) {
        return sprintf('<h4>%s</h4>', $text);
    }

}
