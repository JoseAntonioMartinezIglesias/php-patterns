<?php

include_once 'Empleado.php';

class Gerente extends Empleado {
    
    private $numeroSecreto;
    
    public function __construct() {
        parent::__construct();
        $this->numeroSecreto = '1234';
    }

    public function Identificarse() {
        return "gerente";
    }
    
    public function AtenderReclamacion() {
        $reclamacion = readline("Cuenteme su reclamacion ... ");
        return $reclamacion;
    }

}
