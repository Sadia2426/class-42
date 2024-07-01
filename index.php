<?php
class person{
    public function flat(){
        echo '2BHK Flat <br>';
    }
    public function car(){
        echo 'Ferrari <br>';
    }
}


class child extends person{
    public function bike (){
        echo 'R15-V3 <br>';
    }
}

$child = new child();
$child->bike();
$child->flat();
$child->car();

class Calculator1{
    public function sum( $num1, $num2){
        $x = $num1;
        $y = $num2;

        return $x+$y;
    }

    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;

        return $x-$y;

    }

}  

class Calculator2{
    public function mul( $num1, $num2){
        $x = $num1;
        $y = $num2;

        return $x*$y;
    }
    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;

        return $x/$y;
    }
} 

$calculator1= new Calculator1();

echo $calculator1-> sum( num1: 40, num2: 50). '<br>';
echo $calculator1-> sub( num1: 40, num2: 50). '<br>';

$calculator2= new Calculator2();

echo $calculator2-> mul( num1: 40, num2: 50). '<br>';
echo $calculator2-> div( num1: 40, num2: 50). '<br>';



class test{

    public function __destruct(){
        echo 'This is Destructor <br>';
    }
    public function __construct(){
        echo 'This is Constructor <br>';
    }
    public function show(){
        echo 'Hello World <br>';
    }
    public function greetings(){
        echo 'Good Evening <br>';
    }
}

$object = new Test();
$object->show();
$object->greetings();


?>