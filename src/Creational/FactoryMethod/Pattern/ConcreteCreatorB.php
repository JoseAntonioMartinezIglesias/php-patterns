<?php

include_once 'Creator.php';
include_once 'ProductB.php';

class ConcreteCreatorB extends Creator {

	protected function factoryMethod() {
		return new ProductB();
	}

}
