<?php

include_once '../../../src/autoload.php';

use Structural\DependencyInjection\V1\DatabaseConfiguration;
use Structural\DependencyInjection\V1\DatabaseConnection;

$config = new DatabaseConfiguration('localhost', 3306, 'UserRoot', '12345');
$connection = new DatabaseConnection($config);
var_dump($connection->getDsn());
var_dump($connection);