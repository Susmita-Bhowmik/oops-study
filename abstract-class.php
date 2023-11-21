<?php 
// abstract class (object cannot be created form abstract class)

abstract class parentClass{

 abstract protected function sum($a , $b );//if we use abstract class then one abstract method should be there
 // which have no body only declared
}

class childClass extends parentClass{ // in derived class abstract method body is defined
    public function sum($x, $z){
        echo 'result is = '. $x + $z ;
    }
}

$obj = new childClass();
$obj->sum(78,90);





?>