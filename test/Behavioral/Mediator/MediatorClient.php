<?php

include_once '../../../src/autoload.php';

use Behavioral\Mediator\V1\SubSystem\Client;
use Behavioral\Mediator\V1\SubSystem\Database;
use Behavioral\Mediator\V1\SubSystem\Server;
use Behavioral\Mediator\V1\Mediator;

$client = new Client();
$database = new Database();
$mediator = new Mediator($database, $client, new Server());
$client->request();

