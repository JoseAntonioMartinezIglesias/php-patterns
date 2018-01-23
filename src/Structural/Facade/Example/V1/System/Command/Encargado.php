<?php

include_once 'Empleado.php';

class Encargado extends Empleado {

    public function Identificarse() {
        return "Encargado";
    }
    
    public function atenderCliente() {
        print "Un momento hora les atiendo ... \n";
        sleep(1);
        $this->carta->mostrarCarta();
         do {
            $this->tomarNota(readline("Elige un plato de la carta -> "));
        } while ($this->atendido === false);
        $this->ConfirmarPedido();
        print "Se le aplico un descuento del 20% por la espera, gracias ! \n";
    }

}
