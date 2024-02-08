<?php
class Deposito{
    private $liquido;
    private $litros;
    public function __construct($liquido , $litros){
        $this->liquido=$liquido;
        $this->litros=$litros;

    }
    public function vaciardeposito($cantidad){
        if($cantidad > 0 && $cantidad <= $this->litros){
            $this->litros -= $cantidad;
            echo "Depósito vaciado: Se retiraron {$cantidad} litros de {$this->liquido}.\n";
        }else 
        echo "Error: No se pueden retirar {$cantidad} litros. La cantidad es inválida o insuficiente.\n";
    }
    public function mostrardeposito() {
        echo "Estado actual del depósito: {$this->litros} litros de {$this->liquido}.\n";
    }
}
$depositomundial = new Deposito("agua",100000);
echo "\nDeposito inicial:\n";
$depositomundial ->mostrardeposito();
echo "<br>";
$depositomundial ->vaciardeposito(5000);
echo "<br>";
$depositomundial ->mostrardeposito();
echo "<br>";

?>