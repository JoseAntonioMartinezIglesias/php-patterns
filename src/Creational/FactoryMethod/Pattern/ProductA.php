<?php

include_once 'Product.php';

class ProductA implements Product {

    public function write() {
        print "ProductA \n";
    }

}
