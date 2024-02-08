<?php
 class Jugador {
    protected $nombre;
    protected $dorsal;

    public function __construct($nombre, $dorsal) {
        $this->nombre = $nombre;
        $this->dorsal = $dorsal;
    }

  public function getNombre(){
    return $this->nombre;
  }
  public function getDorsal(){
    return $this->dorsal;
  }
}

class delantero extends Jugador {
    private $gol;

    function __construct($nombre, $dorsal, $gol) {
        parent::__construct($nombre, $dorsal);
        $this->gol = $gol;
    }

    public function getGoles() {
        return $this->gol;
    }
}

class portero extends Jugador {
    private $paradas;

    function __construct($nombre, $dorsal, $paradas) {
        parent::__construct($nombre, $dorsal);
        $this->paradas = $paradas;
    }

    public function getParadas() {
        return $this->paradas;
}
}
$messi = new delantero("Messi", 10,50);
$casillas = new portero("iker", 1 , 35);
echo "Datos del Delantero:\n";
echo "Nombre: {$messi->getNombre()}\n" . "<br>";
echo "Dorsal: {$messi->getDorsal()}\n" . "<br>";
echo "Goles: {$messi->getGoles()}\n" . "<br>";

echo "\nDatos del Portero:\n";
echo "Nombre: {$casillas->getNombre()}\n" . "<br>";
echo "Dorsal: {$casillas->getDorsal()}\n" . "<br>";
echo "Paradas: {$casillas->getParadas()}\n" . "<br>";

?>