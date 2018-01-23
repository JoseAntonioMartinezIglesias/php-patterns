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

    // Constructor del vehículo
    // Hace uso de la factoría para obtener (o generar, en caso de que no exista) la parte implícita de
    // los datos del vehículo (marca, modelo y color)
    public function __construct(string $marca, string $modelo, string $tipo, string $color, // Datos implícitos
            string $matricula, string $fechaMatriculacion, string $nifTitular) {// Datos explícitos 
        $vehiculo = new VehiculoFactory();
        $this->datosImplicitos = $vehiculo->GetCar($marca, $modelo, $tipo, $color);

        // Asignamos los datos propios, exclusivos de este objeto
        $this->matricula = $matricula;
        $this->fechaMatriculacion = $fechaMatriculacion;
        $this->nifTitular = $nifTitular;
        
    }

    // Método que accede tanto a datos implícitos como a datos explícitos
    public function mostrarInformacionVehiculo() : void {
        $this->datosImplicitos->mostrarCaracteristicas(
                "Datos explicitos de este vehiculo \n" .
                "Matricula " . $this->matricula .
                " Fecha Matriculacion " . $this->fechaMatriculacion .
                " Nif del titular " . $this->nifTitular
        );
    }

}
