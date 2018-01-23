<?php

include_once 'Subsystem/SubsystemFacade.php';

class Client {

    public function exec() {

        $subsystemFacade = new SubsystemFacade();
        $subsystemFacade->m1_2();
        $subsystemFacade->m3_4();
        $subsystemFacade->m5();
        
    }

}

$client = new Client();
$client->exec();
