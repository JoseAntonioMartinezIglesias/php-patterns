<?php

include_once 'LoginHandler.php';
include_once 'Input.php';

class Login extends LoginHandler {

    const PASS = "1234";
    private $input;

    public function Login(LoginHandler $handler) {
        parent::__construct($handler);
        $this->input = new Input();
    }

    public function handler() {
        if ($this->input->inputPassword() === self::PASS) {
            print ("Exito al iniciar session \n");
            exit();
        }
        //Siguiente responsable que es el objeto que le pongamos
        $this->LoginHandler->handler();
    }

}
