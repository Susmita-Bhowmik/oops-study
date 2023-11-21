<?php 

// declare interface start with the interface keyword

interface parent1{

    // interface's method don't have body all are abstract method

    function method1($s);
}
interface parent2{
    function method2($m);

}
interface parent3{
    function method3($n);

}
// to derived interface use a derived class use inplements keyword 
//and wrote the bodies of the method of interfaces

class show implements  parent1, parent2 , parent3{
    public function method1($s){
        echo "My name is ".$s .'<br>';
    }
    public function method2($m){
        echo "My city name is ".$m .'<br>';
    }
    public function method3($n){
        echo "My roll no. is ".$n .'<br>';
    }
}
// create the object of derived class

$obj = new show();
$obj->method1('Susmita Bhowmik');
$obj->method2('Kolkta');
$obj->method3('1');23



?>