<?php

include_once 'Impresora.php';

/**
 * Basic, not use facade
 */
$impresora = new Impresora();
$impresora->setHoja("A4");
$impresora->setColor(true);
$impresora->setTipoDocumento("pdf");
$impresora->setTexto("texto 1");
$impresora->imprimirDocumento();

$impresoraB = new Impresora();
$impresoraB->setHoja("A3");
$impresoraB->setColor(true);
$impresoraB->setTipoDocumento("excel");
$impresoraB->setTexto("texto 2");
$impresoraB->imprimirDocumento();

/**
 * Better, use facade
 */
$impresora = new ImpresoraFacade("texto1");
$impresora->imprimir();

$impresoraB = new ImpresoraFacade("texto2");
$impresoraB->imprimir();

$impresoraC = new ImpresoraFacade("texto3");
$impresoraC->imprimir();

