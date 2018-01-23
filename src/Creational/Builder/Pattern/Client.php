<?php

include_once 'Director.php';
include_once 'Builder/ConcreteBuilderA.php';
include_once 'Builder/ConcreteBuilderB.php';

        $director = new Director(new ConcreteBuilderA());
        $result = $director->getResult();
        var_dump($result->getProduct());
        
        $directorB = new Director(new ConcreteBuilderB());
        $resultB = $directorB->getResult();
        var_dump($resultB->getProduct());

