<?php 
// destruct function is call autometically at the last when all the functions of the page have called
class a{
    function __construct(){
        echo 'hello, this is constructor it call first when any object created ofd the class <br>';
    }

    function show(){
    echo 'hiii, its a common method <br>';
    }

    function __destruct(){
        echo 'this is destruct method it called at last  when all functions of the page are called';
    }
}

$obj = new a();
$obj->show();


?>