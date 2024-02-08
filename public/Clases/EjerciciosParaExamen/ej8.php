<?php
class Estudiantes{
    private $nombre; 
    private $nota;
    public function __construct($nombre, $notas){
        $this->nombre = $nombre;
        $this->setnotas($notas);
    }
    public function getnombre(){
        return $this->nombre;
    }
    public function getnotas() {
        return $this->nota;    
    }
public function setnotas($nota){
    $this->nota= max(0, min(10,$nota));
}

}
$estudiante1= new Estudiantes("David", 12);
echo "Nombre del estudiante: ". $estudiante1->getnombre(). "<br>";
echo "Nota del estudiante: ". $estudiante1->getnotas(); echo"<br><br>";
$estudiante1 ->setnotas(-3);
echo "Nota del estudiante: ". $estudiante1->getnotas(); echo"<br><br>";

?>