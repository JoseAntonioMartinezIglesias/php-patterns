<?php

include_once 'State.php';

class StateA extends State {

    public function action1(Context $context) {
        $context->setState(new StateB());
        error_log(__CLASS__ . 'Se ejecuta action1 de estado A', 3, 'logger.log');
    }

    public function action2() {
        error_log(__CLASS__ . 'Se ejecuta action2 de estado A', 3, 'logger.log');
    }

    public function toString(): string {
        return "Estado A";
    }

}
