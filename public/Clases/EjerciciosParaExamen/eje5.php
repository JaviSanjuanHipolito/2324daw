<?php
class Refresco{
private $sabor;
private $nivelAzucar;
private $capacidadEnvase;
public function __construct($sabor, $nivelDeAzucar, $tamañoDelEnvase) { 
$this->sabor=$sabor;
$this->nivelAzucar = $nivelDeAzucar;
$this->capacidadEnvase= $tamañoDelEnvase;
}
public function mostrarinformacion() {
echo "Sabor: ". $this->sabor . "\n";
echo "nivel de azucar: ". $this->nivelAzucar . "\n";
echo "capacidad de envase: ". $this->capacidadEnvase . "\n";
}
}
$cocacola = new Refresco('cocacola', 750 , 350);
$fanta = new Refresco('Fanta', 600 , 350);

echo "Mostrar información cocacola"  . "<br>";
$cocacola ->mostrarinformacion();
echo "<br>";
echo " Mostrar información fanta" . "<br>";
$fanta->mostrarinformacion();

?>