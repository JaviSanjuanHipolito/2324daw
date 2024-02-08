<?php
class Complex{
    private $real1;
    private $real2;
    private $imaginario1;
    private $imaginario2;

    public function __construct($real1,$real2, $imaginario1,$imaginario2){
        $this->real1=$real1;
        $this->real2=$real2;
        $this->imaginario1=$imaginario1;
        $this->imaginario2=$imaginario2;
}
public function sumar(){
    $nuevoreal= $this->real1 + $this->real2;
    $nuevoimag =$this->imaginario1+$this->imaginario2;
    return new self($nuevoreal ,$this->imaginario1, $this->real2, $this->imaginario2);
}
public function restar() {

}

}

?>