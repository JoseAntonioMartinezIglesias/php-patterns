<?php

include_once 'ModeloDeportivo.php';
include_once 'ModeloBerlina.php';

class VehiculoFactory {

    // El pool se encargará de almacenar las instancias de los objetos reutilizables ...
    private $pool = [];

    public function GetCar(string $marca, string $modelo, string $tipo, string $color) : ModeloVehiculo {

        if (!isset($this->pool[$marca . " " . $modelo . " " . $color])) {
            if ($tipo == "sport") {
                $this->pool[$marca . " " . $modelo . " " . $color] = new ModeloDeportivo($marca, $modelo, $tipo, $color);
            } else {
                $this->pool[$marca . " " . $modelo . " " . $color] = new ModeloBerlina($marca, $modelo, $tipo, $color);
            }
        }
        return $this->pool[$marca . " " . $modelo . " " . $color];
        
    }

}
