<?php
class Persona {

    private $nombre;
    private $apellido;
    private $edad;

    
function __construct($name='',$surname='',$age=0){
    $this->nombre=$name;
    $this->apellido=$surname;
    $this->edad=$age;
    
}
public function setName($name){
    $this->nombre=$name;

    }

public function getName(){
    return $this->nombre;
}   

public function setSurname($surname){
    $this->apellido=$surname;
    }

public function getSurname(){
    return $this->apellido;
    }

public function setAge($age){
    $this->edad=$age;
    }
    public function getAge(){
        return $this->edad;
        }


}

$Persona1=new Persona;
$Persona2=new Persona('Alejandro','Rodriguez',18);

echo 'Cosas Persona 1';
echo '<br>';


$Persona1-> setName('Ivan');
echo "Nombre:".$Persona1->getName()."<br>";  
$Persona1->setSurname("Contador");
echo "Apellido:".$Persona1->getSurname()."<br>";
$Persona1->setAge(18);
echo "Edad:".$Persona1->getAge()."<br>";


//-----------------------------------------

echo '<br>Cosas Persona 2';
echo "<br>";

echo "Nombre:".$Persona2->getName()."<br>";  
echo "Apellido:".$Persona2->getSurname()."<br>";
echo "Edad:".$Persona2->getAge()."<br>";



?>