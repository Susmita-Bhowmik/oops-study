<?php 

// by using namespace wew can use same class in a page 





require 'product.php';
require 'listing.php';

class product{
    public function __construct(){
        echo 'this is index page class';
    }
}

$obj1 = new listing\product();
$obj2 = new productpage\product();

$obj = new product();








?>