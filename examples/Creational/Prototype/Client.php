<?php

include_once 'PrototipoLibroPHP.php';
include_once 'PrototipoLibroSQL.php';

$phpProto = new PrototipoLibroPHP();
$sqlProto = new PrototipoLibroSQL();

$libro1 = clone $sqlProto;
$libro1->establecerTitulo("SQL para Gatos");

print "Libro 1 tema: " . $libro1->obtenerTema();
print "Libro 1 título: " . $libro1->obtenerTitulo();
print "\n";

$libro2 = clone $phpProto;
$libro2->establecerTitulo("OReilly Learning PHP 5");

print "Libro 2 tema: " . $libro2->obtenerTema();
print "Libro 2 título: " . $libro2->obtenerTitulo();
print "\n";

$libro3 = clone $sqlProto;
$libro3->establecerTitulo("OReilly Learning SQL");

print "Libro 3 tema: " . $libro3->obtenerTema();
print "Libro 3 título: " . $libro3->obtenerTitulo();

print "\n";
print "\n";

print "FIN PRUEBA PATRÓN PROTOTIPO \n";



