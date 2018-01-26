<?php

include_once 'VehiculoFactory.php';

class Vehiculo {

    /**
     * @var ModeloVehiculo Los datos implícitos estarán encapsulados dentro de la clase ModeloVehiculo
     */
    private $datosImplicitos;

    /**
     * @var string Datos explícitos
     */
    private $matricula;

    /**
     * @var datetime
     */
    private $fechaMatriculacion;

    /**
     * @var string
     */
    private $nifTitular;

    public function __construct(string $marca, string $modelo, string $tipo, string $color, // Datos implícitos
            string $matricula, string $fechaMatriculacion, string $nifTitular) {// Datos explícitos 
        $vehiculo = new VehiculoFactory();
        $this->datosImplicitos = $vehiculo->GetCar($marca, $modelo, $tipo, $color);

        $this->matricula = $matricula;
        $this->fechaMatriculacion = $fechaMatriculacion;
        $this->nifTitular = $nifTitular;
    }

    public function mostrarInformacionVehiculo(): void {
        $this->datosImplicitos->mostrarCaracteristicas(
                "Datos explicitos de este vehiculo \n" .
                "Matricula " . $this->matricula .
                " Fecha Matriculacion " . $this->fechaMatriculacion .
                " Nif del titular " . $this->nifTitular
        );
    }

}
