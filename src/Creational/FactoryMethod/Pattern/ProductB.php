<?php

include_once 'Product.php';

class ProductB implements Product {

    public function write() {
        print "ProductB \n";
    }

}
