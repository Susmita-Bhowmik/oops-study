<?php 

class calculation{ // class declaration
//public $a, $b, $c ; // these are properties | public is access modifier

function sum($a,$b){
    
   // $c = $this->a + $this->b ;
    return $c = $a+ $b;
}
function sub($a,$b){
    $c = $a-$b ;
    return $c;
}
function multipy(){
    $c = $a*$b;
    return $c;
}
function division(){
    $c = $a/$b;
    return $c;
}

}

$obj = new calculation();
//$obj->a = 10;
//$obj-> b = 20;

echo 'The result of sum is'.$obj->sum(10,20).'<br>';


?>