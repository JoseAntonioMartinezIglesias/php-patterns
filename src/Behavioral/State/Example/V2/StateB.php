<?php

include_once 'State.php';

class StateB extends State {

    public function action1() {
        error_log(__CLASS__ . 'Se ejecuta action1 de estado B', 3, 'logger.log');
    }

    public function action2(Context $context) {
        $context->setState(new StateA());
        error_log(__CLASS__ . 'Se ejecuta action2 de estado B', 3, 'logger.log');
    }

    public function toString(): string {
        return "Estado B";
    }

}
