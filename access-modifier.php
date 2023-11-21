<?php 

//access modifier

class book{

    protected $a , $b ;

    function __construct($a , $b){

        $this->a = $a ;
        $this->b = $b ;
     

    }


}
class pen extends book{
    function info(){
    echo  'total = ' . $this->a + $this->b ;

    }
}

$obj = new pen(12,78);

$obj->info();









?>