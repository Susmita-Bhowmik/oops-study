<?php 

// parent class

class employee{

// properties (global variables)
    public $name, $age , $salary;

// constructor 

    function __construct($n,$a,$s){

        $this->name = $n;
        $this->age = $a ; 
        $this->salary = $s;


    }


    function info(){
        echo 'Employee Profile <br>';
        echo 'Name : '.$this->name.'<br>';
        echo 'Age : '.$this->age . '<br>';
        echo 'Salary : '.$this->salary .'<br>';
    }

}
// inharited class
class manager extends employee{

   
// method in inharited class

    function manager_profile($ta = 2000){
        echo 'Manager Profile <br>';
        echo 'Name : '.$this->name.'<br>';
        echo 'Age : '.$this->age . '<br>';
        echo 'Total Salary : '.$this->salary +$ta.'<br>';
    }

}
// create obj with child class

$obj = new manager('susmita',23,4000);

$obj->manager_profile();











?>