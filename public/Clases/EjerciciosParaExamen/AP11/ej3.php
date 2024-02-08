<?php
class empleado{
    private $nombre;
    private $salario;
    private $horasDia;

    function __construct($nom,  $sala, $horas){
        $this->nombre = $nom;
        $this->salario= $sala;
        $this->horasDia=$horas;
    }
function getInfo(){
    $sueldo= $this->salario * $this->horasDia;
    return $sueldo;
}
function Addsal($sueldo){
    if ($sueldo <= 500){
        $this->salario +=10;
    }
}
function AddWork(){
    if($this->horasDia >6){
        $this->salario +=5;
    }
}

}
$empleado1 = new Empleado("Juan",200,8);
echo "El sueldo de Juan es: ". $empleado1 ->getInfo()."<br>";


?>