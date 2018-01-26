<?php
include_once 'Vehiculo.php'; 

$VehiculoA = new Vehiculo("Seat", "Ibiza sport", "sport", "Amarillo", "1238-CCA", "22 Feb 1981", "71000015A");
$VehiculoA->mostrarInformacionVehiculo();

$VehiculoB = new Vehiculo("Bmw", "380i", "Berlina", "Azul", "4258-AA", "2 Mar 1991", "5078923Y");
$VehiculoB->mostrarInformacionVehiculo();

