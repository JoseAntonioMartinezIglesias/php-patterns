<?php

include_once 'LoginHandler.php';
include_once 'Login.php';

class ErrorLogin extends LoginHandler {

    private $error_count;
    private $max_error_count = 1;

    public function __construct($error_count = 0) {
        parent::__construct(null);
        $this->error_count = $error_count;
    }

    public function handler() {
        $this->error_count ++;
        if ($this->error_count <= $this->max_error_count) {
            print "Error al introducir tu password \n";
            $this->LoginHandler = new Login(new ErrorLogin($this->error_count));
            $this->LoginHandler->handler();
        }
        print "Se ha bloqueado tu acceso por seguridad\n";
        exit();
    }

}
