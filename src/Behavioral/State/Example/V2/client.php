<?php

include_once 'Context.php';
include_once 'State.php';
include_once 'State.phpA';
include_once 'State.phpB';

$context = new Context();
$context->context(new StateA());
$context->action1();
$context->context(new StateB());
$context->action2();
$context->toString();
$context->context(new StateA());
$context->action2();
$context->toString();
