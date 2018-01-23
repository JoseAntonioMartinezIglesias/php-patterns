<?php

include_once 'Camarero.php';
include_once 'Encargado.php';
include_once 'Gerente.php';

class Command {

    public function pedir($empleado) {
        $empleado->atenderCliente();
    }
    public function reclamar(Gerente $gerente) {
        $gerente->AtenderReclamacion();
    }

}
/*
$cliente = new ClienteB();
$cliente->pedir(new Encargado());
$cliente->reclamar(new Gerente());
 * */
 
