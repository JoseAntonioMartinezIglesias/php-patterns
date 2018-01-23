<?php

include_once 'Product.php';

class ProductAB extends Product {

    /**
     * @return void
     */
    public function writeln() {
        print "ProductAB \n";
    }

}
