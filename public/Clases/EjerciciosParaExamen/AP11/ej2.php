<?php
class Average{
    private $num1;
    private $num2;
    private $num3;
    function __construct($n1, $n2, $n3){
    $this-> num1 = $n1;
    $this-> num2 = $n2;
    $this-> num3 = $n3;

    }

    function getnum1(){
        return $this -> num1;
    }
    function getnum2(){
        return $this -> num2;
    }
    function getnum3(){
        return $this-> num3;
    }
    function promedio(){
        return ($this->num1 + $this->num2 + $this->num3)/3;
    }

}
$average = new Average(7,1,15);
echo "El promedio de los numeros es: ". $average->promedio();


?>