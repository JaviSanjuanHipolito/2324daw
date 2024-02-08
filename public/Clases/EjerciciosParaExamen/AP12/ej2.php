<?php
 abstract class Persona{
      protected $nombre;
      protected $direccion;
    public function __construct($nombre, $direccion){    
    $this->nombre = $nombre;
    $this->direccion=$direccion;
    }
    abstract function getprop();
       
}
class Estudiante extends Persona{
    protected $nif;
    protected $fechaAlta;
    protected $edad;

    public function __construct($nombre, $direccion, $nif, $fechaAlta, $edad){
        parent::__construct($nombre,$direccion);
        $this->nif= $nif;
        $this->fechaAlta=$fechaAlta;
        $this->edad=$edad;
    }
    public function getprop(){
        return $this->nombre . $this->direccion .  $this->nif .  $this->fechaAlta .  $this->edad;
    }
}
class EstudianteIntercambio extends Estudiante{
    private $paisorigen;
    public  function __construct($nombre, $direccion, $nif, $fechaAlta, $edad, $paisorigen){
        parent::__construct($nombre, $direccion, $nif, $fechaAlta, $edad);
        $this->paisorigen=$paisorigen;
    }
    public function getprop(){
       
        return $this->nombre . $this->direccion .  $this->nif .  $this->fechaAlta .  $this->edad . $this->paisorigen;
    }
}
class Profesor extends Persona{
    private $numSS;
    private $titulacion;
    private $especialidad;
    public function __construct($nombre, $direccion, $numSS, $titulacion, $especialidad){
        parent::__construct($nombre, $direccion);
        $this->numSS=$numSS;
        $this->titulacion=$titulacion;
        $this->especialidad=$especialidad;
    }
 public function getprop(){
    return $this->nombre . $this->direccion . $this->numSS . $this->titulacion . $this->especialidad;
 }
}
class Personalgestion extends Persona{
    private $numSS;
    private $posicion;
    public function __construct($nombre, $direccion, $numSS, $posicion) {
    parent::__construct($nombre, $direccion);
    $this->numSS = $numSS;
    $this->posicion = $posicion;
    }
    public function getprop(){
        return $this->nombre . $this->direccion . $this->numSS . $this->posicion;
    }
}

echo "Estudiante<br>";
$est1=new Estudiante("Juan","C/Falsa",987654321, "1/1/2020", "20");
echo $est1->getprop();
echo "<br>------------------------------<br>";

?>