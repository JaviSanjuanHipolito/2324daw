<?php

class Corriente {
    private $titular;
    private $cantidad;
}


function __construct($cantidad){
    $this->cantidad = $cantidad;
}



class Ahorro {
    private $Titular;
    private $Cantidad;
    private $interes;
}

function __construct($Cantidad, $interes){
    $this->Cantidad = $Cantidad;
    $this->interes = $interes;
}


class Inversion {
    private $TItular;
    private $CAntidad;
    private $Inversion;
}

function __construct($CAntidad, $Inversion){
    $this->CAntidad = $CAntidad;
    $this->Inversion = $Inversion;
}




public function ingresarEfectivo($cantidad, $Cantidad, $CAntidad){

    return $this->cantidad;
    return $this->CAntidad;
    $interes = $this->Cantidad + $this->interes;
    return new self($interes, $this->cantidad, $this->CAntidad);

}

public function retirarEfectivo($cantidad, $CAntidad, $Inversion){
    if ($this->cantidad < $cantidad) {
        echo "Aqui tienes tu dinero";
    } else {
        echo "No tienes suficiente dinero";
    }


    if ($this->CAntidad < $CAntidad - )
    

}

public function modificarInteres(){

    return new self($interes);

}

public function modificarInversion(){

    return new self($inversion);
}
?>




