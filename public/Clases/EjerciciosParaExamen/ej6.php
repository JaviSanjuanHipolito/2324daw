<?php
class Producto{
private $denominacion;
private $unidades_stack;
private $precio;
public function __construct($denominacion,$unidades_stack,$precio){
    $this->denominacion=$denominacion;
    $this->unidades_stack=$unidades_stack;
    $this->precio=$precio;
}
public function reponer($cantidad){
    $this->unidades_stack+=$cantidad;
    if($this->unidades_stack <=0){
        echo "No hay stock {$this->denominacion}!\n";
    } else {
        echo "hay stock {$this->denominacion}\n";
    }
}
public function vender($cantidad){
    if($cantidad >0 && $cantidad <= $this->unidades_stack){
        $this->unidades_stack-= $cantidad;
        echo "Se ha echo una venta \n";
    } else
    echo "No hay suficiente stock para esta compra\n";

}
public function getstock(){
    return $this->unidades_stack;
}
}
$tomate = new Producto("cherry",10,5);
echo "Hay ". $tomate ->getstock()." tomates en el inventario.\n";
$tomate -> reponer(3);
echo "Ahora hay ". $tomate -> getstock()." tomates en el inventario.\n";
$tomate -> vender(4);
echo "Quedan ". $tomate -> getstock() ." tomates en el inventario.\n";

?>