<?php

namespace Creational\SimpleFactory;

class SimpleFactory {

    public function createProductA() {
        return new ProductA();
    }
    public function createProductB() {
        return new ProductB();
    }

}
