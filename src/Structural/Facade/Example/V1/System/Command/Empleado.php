<?php

include_once 'Comanda.php';
include_once 'Carta.php';
include_once 'Platos.php';
include_once 'Cocinero.php';
include_once 'ComandaCarne.php';
include_once 'ComandaVerduras.php';
include_once 'ComandaArroz.php';

abstract class Empleado {

    protected $atendido = false;
    protected $carta;
    protected $platos;

    public function __construct() {       
        $this->carta = new Carta();
        $this->platos = new Platos();
    }
    
    abstract function Identificarse();
    
    public function atenderCliente() {//Void
        $this->saludarCliente();
        $this->carta->mostrarCarta();

        do {
            $this->tomarNota(readline("Elige un plato de la carta -> "));
        } while ($this->atendido === false);
        $this->ConfirmarPedido();
        //exit();
    }

    public function saludarCliente() {
        print "Bienvenido a nuestro restaurante \n";
        print "Esta es nuestra carta \n";
    }

    public function confirmarPedido() {
        print "Tu pedido se ha realizado, en breve lo tendras en tu mesa \n";
    }

    public function tomarNota($pedido) {
        $pedido = ucfirst(strtolower($pedido));
        print 'Has elegido ' . $pedido . "\n";
        if (in_array($pedido, $this->platos->getPlatos())) {
            $this->apuntarPedido($pedido);
            $this->atendido = true;
        } else {
            print "Seleccion no valida \n";
            $this->atendido = false;
        }
    }

    public function apuntarPedido($pedido) {
        $pedido = 'Comanda' . $pedido;
        $comanda = new $pedido(new Cocinero());
        $this->enviarComanda($comanda);
    }

    public function enviarComanda(Comanda $comanda) {
        $comanda->execute();
    }

}
