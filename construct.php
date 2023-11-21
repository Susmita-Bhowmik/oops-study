<?php 

//create class

class person{
    public $name;
    public $age;

// create costructor (a function which is called automatically when any object is created with the class name)
    function __construct($n , $a){

        $this->name = $n;
        $this->age = $a;

    }

    function show(){
        echo 'My name is '.$this->name.' and age is '. $this->age ;
    }
}

$obj = new person('Susmita',23);
$obj1 = new person('moimita',20);
$obj1->show();










?>