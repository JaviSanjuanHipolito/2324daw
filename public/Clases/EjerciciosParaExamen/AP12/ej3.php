<?php
class figura{
    protected $x;
    protected $y;
    protected $medida;
    protected $color;

    public function __construct($x, $y, $medida, $color) {
        $this->x = $x;
        $this->y = $y;
        $this->medida = $medida;
        $this->color = $color;
    }
    public function mover($nuevaX , $nuevaY) {
        $this-> x = $nuevaX;
        $this-> y= $nuevaY;

    }
      public function nuevamedida($nuevamedida){
        $this -> medida=$nuevamedida;
    }
     public function color ($nuevocolor){
        $this->color = $nuevocolor;
    }
     public function imprimirCaracteristicas() {
        echo "Tipo de Figura: " . get_class($this) . "\n";
        echo "Ubicación (X, Y): ({$this->x}, {$this->y})\n";
        echo "Medida: {$this->medida}\n";
        echo "Color: {$this->color}\n";
    }
}
class triangulo extends figura{
private $lado1;
private $lado2;
private $lado3;
public function __construct($x,$y,$medida,$color,$lado1,$lado2,$lado3) {
    parent::__construct($x,$y,$medida,$color);
    $this->lado1 = $lado1;
    $this ->lado2 = $lado2;
    $this ->lado3 = $lado3;
}
public function nuevamedida($nuevamedida){
    $this->lado1 = $nuevamedida;
}


public function imprimirCaracteristicas() {
    echo "Tipo de Figura: " . get_class($this) . "\n";
    echo "Ubicación (X, Y): ({$this->x}, {$this->y})\n";
    echo "Lado 1: {$this->lado1}\n";
    echo "Lado 2: {$this->lado2}\n";
    echo "Lado 3: {$this->lado3}\n";
    echo "Color: {$this->color}\n";
}
}
class cuadrado extends figura{
private $lado;
private $ancho;
public function __construct($x,$y,$medida,$color,$lado, $ancho) {
    parent::__construct($x,$y,$medida,$color);
    $this->lado = $lado;
    $this-> ancho = $ancho;
    }
public function nuevamedida($nuevamedida){
    $this->lado = $nuevamedida;
    $this->ancho = $nuevamedida;
}
public function imprimirCaracteristicas(){
    echo "Tipo de Figura: " . get_class($this) . "\n";
    echo "Ubicación (X, Y): ({$this->x}, {$this->y})\n";
    echo "Lado 1: {$this->lado}\n";
    echo "Lado 2: {$this->ancho}\n";
    echo "Color: {$this->color}\n";
}
}
class circulo extends figura{
    private $radio;
    public function __construct($x,$y,$medida,$color,$radio) {
        parent::__construct($x,$y,$medida,$color);
        $this->radio=$radio;
    }
    public function nuevamedida($nuevamedida){
        $this->radio= $nuevamedida;
    }
    public function imprimirCaracteristicas(){
        echo "Tipo de Figura: " . get_class($this) . "\n";
        echo "Ubicación (X, Y): ({$this->x}, {$this->y})\n";
        echo "Lado 1: {$this->radio}\n";
        echo "Color: {$this->color}\n";
    }
}
$triangulo = new Triangulo(5, 2 ,5 ,"rojo" , 6, 5, 10);
$rectangulo = new cuadrado(10, 10,'Azul',4,  3 , 8 );
$circulo = new Circulo(15,14 ,  15, 6, 'Verde');



$triangulo->imprimirCaracteristicas();
$rectangulo->imprimirCaracteristicas();
$circulo->imprimirCaracteristicas();

// Realizar algunas operaciones
$triangulo->mover(8, 8);
$rectangulo->nuevamedida(12);



echo "\nCaracterísticas después de las operaciones:\n";
$triangulo->imprimirCaracteristicas();
$rectangulo->imprimirCaracteristicas();
$circulo->imprimirCaracteristicas();
?>