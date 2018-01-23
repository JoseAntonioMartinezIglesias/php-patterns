<?php

include_once 'Carta.php';
include_once 'Menu.php';
include_once 'Cocinero.php';
include_once 'Camarero.php';
include_once 'ComandaCarne.php';
include_once 'ComandaVerduras.php';
include_once 'ComandaArroz.php';

class Cliente {

    private $carta;
    private $pedido = false;
    private $menu;
    private $cocinero;
    private $camarero;

    public function __construct() {

        $this->menu = new Menu();
        $this->carta = new Carta();
        $this->cocinero = new Cocinero();
        $this->camarero = new Camarero();
    }

    public function exec() {//Void
        $this->menu->pantallaMenuInicial();
        $this->menu->mostrarCarta();
        do {
            $this->hacerPedido(readline("Elige un plato de la carta -> "));
        } while ($this->pedido === false);
        $this->menu->pantallaConfirmarPedido();
        exit();
    }

    public function hacerPedido($pedido) {
        $pedido = ucfirst(strtolower($pedido));
        print 'Has elegido ' . $pedido . "\n";
        if (in_array($pedido, $this->carta->getCarta())) {
            $pedido = 'Comanda' . $pedido;
            //$comanda = new $pedido($this->cocinero);
            $this->camarero->execute(new $pedido($this->cocinero));
            $this->pedido = true;
        } else {
            print "Seleccion no valida \n";
            $this->pedido = false;
        }
    }

}

$cliente = new Cliente();
$cliente->exec();
