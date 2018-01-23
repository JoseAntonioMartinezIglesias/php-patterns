<?php

include_once 'Creator.php';
include_once 'ProductA.php';

class ConcreteCreatorA extends Creator {

	protected function factoryMethod() {
		return new ProductA();
	}

}
