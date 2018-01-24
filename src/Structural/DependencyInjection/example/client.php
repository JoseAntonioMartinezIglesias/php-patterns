<?php

include_once '../../../autoload.php';

use Structural\DependencyInjection\example\DatabaseConnection;
use Structural\DependencyInjection\example\DatabaseConfiguration;

$connection = new DatabaseConnection();
$connection->connection(new DatabaseConfiguration('localhost', '3303', 'root', 'abcde'));
$connection->getDsn();

