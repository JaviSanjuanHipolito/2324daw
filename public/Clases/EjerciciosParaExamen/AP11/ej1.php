<?php
class Triangle{
    private $longitud;
    private $cateto2;
    private $cateto1;

    function __construct($long=0,$cat1=0,$cat2=0){
        $this -> longitud = $long;
        $this -> cateto1 = $cat1;
        $this -> cateto2 = $cat2;
    }
    function getlongitud(){
        return $this-> longitud;
    }
    function getcateto1(){
        return $this-> cateto1;
    }
    function getcateto2(){
        return $this-> cateto2;
    }

      function area(){
        return ($this->longitud + $this->cateto1 + $this->cateto2)/2;
        
    }
    function perimetro(){
        return ($this->longitud + $this->cateto1 + $this->cateto2);
    }


    
    
    }



$triangle = new triangle(3,5,9);
echo "El área del triángulo es: " . $triangle->area() . "<br>";
echo "El perímetro del triángulo es: " . $triangle->perimetro() . "<br>";


?>