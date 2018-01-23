<?php

abstract class Builder {

    /**
     * @var Product
     */
    protected $product;

    public abstract function builderPartA();
    public abstract function builderPartB();

    public function getProduct() {
        return $this->product;
    }

}
