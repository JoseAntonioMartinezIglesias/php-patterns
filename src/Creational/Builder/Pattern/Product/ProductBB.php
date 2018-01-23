<?php

include_once 'Product.php';

class ProductBB extends Product {

    /**
     * @return void
     */
    public function writeln() {
        print "ProductBB \n";
    }

}
