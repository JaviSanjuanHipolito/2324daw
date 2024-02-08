<?php
class Complex {
    private $real1;
    private $real2;
    private $imaginario1;
    private $imaginario2;

    function __construct($num1, $ima1, $num2, $ima2) {
        $this->real1 = $num1;
        $this->imaginario1 = $ima1;
        $this->real2 = $num2;
        $this->imaginario2 = $ima2;
    }

    public function sumarComplejo() {
        $nuevoReal = $this->real1 + $this->real2;
        $nuevoImaginario = $this->imaginario1 + $this->imaginario2;
        return new self($nuevoReal, $this->imaginario1, $this->real2, $this->imaginario2);
    }

    public function restarComplejo() {
        $nuevoReal = $this->real1 - $this->real2;
        $nuevoImaginario = $this->imaginario1 - $this->imaginario2;
        return new self($nuevoReal, $this->imaginario1, $this->real2, $this->imaginario2);
    }

    public function multiplicarComplejo() {
        $nuevoReal = $this->real1 * $this->real2 - $this->imaginario1 * $this->imaginario2;
        $nuevoImaginario = $this->real1 * $this->imaginario2 + $this->imaginario1 * $this->real2;
        return new self($nuevoReal, $this->imaginario1, $this->real2, $this->imaginario2);
    }

    public function formatoSalida() {
        return "{$this->real1} + {$this->imaginario1}i";
    }
}

$num1 = 6;
$ima1 = 7;
$num2 = 4;
$ima2 = 3;

$complejo = new Complex($num1, $ima1, $num2, $ima2);

$sumaResultado = $complejo->sumarComplejo();
echo "Suma: " . $sumaResultado->formatoSalida() ."<br>";

$restaResultado = $complejo->restarComplejo();
echo "Resta: " . $restaResultado->formatoSalida() ."<br>";

$multiplicacionResultado = $complejo->multiplicarComplejo();
echo "Multiplicación: " . $multiplicacionResultado->formatoSalida()."<br>" ;

?>

