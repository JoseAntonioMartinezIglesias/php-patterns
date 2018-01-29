<?php

include_once 'Login.php';
include_once 'ErrorLogin.php';
include_once 'Input.php';

$client = new Login(new ErrorLogin());
$client->handler();

