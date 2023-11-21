<?php 

//traits is used when we want to use same method in different class it's start with traits keyword

trait calculation{
    public function sum($a , $b){
        echo $a + $b . "\n";
    }
}
// create class to use the traits(using 'use' keyword)
class show {
    use calculation;
    public function sub($a , $b){
        echo $a- $b ."\n";
    }

}

$obj  = new show();
$obj->sum(12,87);
$obj->sub(12,87);







?>