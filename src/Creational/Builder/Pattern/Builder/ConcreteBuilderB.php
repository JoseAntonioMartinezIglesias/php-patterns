<?php

include_once 'Builder.php';
include_once 'Product/ProductBB.php';

class ConcreteBuilderB extends Builder {

	public function builderPartA() {
		$product = new ProductBB();
                $this->product['BuilderPartA'] = $product;
	}
        public function builderPartB(){
            return null;
        }

}
