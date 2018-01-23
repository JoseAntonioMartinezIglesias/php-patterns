<?php

include_once 'Builder.php';
include_once 'Product/ProductAA.php';
include_once 'Product/ProductAB.php';

class ConcreteBuilderA extends Builder {

	public function builderPartA() {
		$product = new ProductAA();
                $this->product['BuilderPartA'] = $product;
	}

	public function builderPartB() {
		$product = new ProductAB();
                $this->product['BuilderPartA'] = $product;
	}

}
