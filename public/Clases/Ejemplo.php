<?php
class Persona{
    //PROPIEDADES
    private $nombre;
    private $apellidos;
    private $edad;

    //MÉTODOS

    //constructor
  
    function __construct($name="", $surname="", $age=0){
        $this->nombre = $name;
        $this->apellidos = $surname;
        $this->edad = $age;
    }

    //setters
    public function setNombre($name){
        $this->nombre = $name;
    }
    public function setApellidos($surname){
        $this->apellidos = $surname;
    }
    public function setEdad($age){
        $this->edad = $age;
    }

    //getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }

    
}


//PROGRAMA PRINCIPAL

//Forma con constructor
$persona1 = new Persona();
$persona2 = new Persona("Ana", "García Pérez", 34);
$persona3 = new persona('Paco','Sanchez',78);


//Forma con setters y getters
$persona1->setNombre("Vicente");
$persona1->setApellidos("Monfort Salvador");
$persona1->setEdad(46);


echo "Cositas de persona 1 <br>";
echo "---------------------<br>";
echo $persona1->getNombre() . " " . $persona1->getApellidos() . "<br>";
$aux=2023-$persona1->getEdad();
echo "Eres un viejuno, has nacido en el año " . $aux . "<br><br>";


$persona2->setNombre("Ana María");
echo "Cositas de persona 2 <br>";
echo "---------------------<br>";
echo $persona2->getNombre() . " " . $persona2->getApellidos() . "<br>";
$aux=2023-$persona2->getEdad();
echo "Eres un viejuno, has nacido en el año " . $aux . "<br>";



?>