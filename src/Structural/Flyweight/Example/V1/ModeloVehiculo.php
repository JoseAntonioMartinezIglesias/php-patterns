<?php

abstract class ModeloVehiculo {

    private $marca;
    private $modelo;
    private $tipo;
    private $color;

    public function __construct(string $marca, string $modelo, string $tipo, string $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->color = $color;
    }

    public function mostrarCaracteristicas(string $datosExtra=null) : void {
        print "-----------------------------------------------------\n";
        print "Datos implicitos de este vehiculo \n";
        print "Tipo vehiculo " . $this->tipo . "\n";
        print $this->marca . " " . $this->modelo . " de color " . $this->color . " " . "\n \n";
        print $datosExtra . "\n";
        print "-----------------------------------------------------\n";
    }

}
