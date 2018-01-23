<?php

include_once 'Carta.php';

/**
 * Esta clase es la encargara de mostranos de pintar el menu en pantalla
 * Necesita conocer la carta para pintarla en menu seleccionar
 */
class Menu {

    private $carta;

    public function __construct() {
        $this->carta = new Carta();
    }

    public function pantallaMenuInicial() {
        print "Bienvenido a nuestras carta \n";
    }

    public function mostrarCarta() {
        
        print "Esta es nuestra carta para el dia de hoy \n";
        
        foreach ($this->carta->getCarta() as $plato) {
            print "-> " . $plato . "\n";
        }
        
    }
    public function pantallaConfirmarPedido() {
        print "Tu pedido se ha confirmado, en breve lo tendras en tu mesa \n";
    }

}
