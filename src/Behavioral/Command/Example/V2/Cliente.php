<?php

include_once 'Camarero.php';
include_once 'Encargado.php';
include_once 'Gerente.php';

class Cliente {

    public function pedir($empleado) {
        $empleado->atenderCliente();
    }
    public function reclamar(Gerente $gerente) {
        $gerente->AtenderReclamacion();
    }

}

$cliente = new Cliente();
$cliente->pedir(new Gerente());
$cliente->reclamar(new Gerente());
