<?php

include_once '../../../autoload.php';

use Structural\DependencyInjection\example\DatabaseConnection;
use Structural\DependencyInjection\example\DatabaseConf;
use Structural\DependencyInjection\example\OtherDatabaseConf;
use Structural\DependencyInjection\example\OtherDatabaseConfB;

$connectionA = new DatabaseConnection();
$connectionA->connection(new DatabaseConf('localhost', '3303', 'root', '****'));
$connectionA->getDsn();

/* Diferent inyection config */
$connectionB = new DatabaseConnection();
$connectionB->connection(new OtherDatabaseConf());

/* Better */
$connectionC = new DatabaseConnection();
$connectionC->connection(new OtherDatabaseConfB());