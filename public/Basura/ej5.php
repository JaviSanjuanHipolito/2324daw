<?php
class Matrix
{
    private $filas;
    private $columnas;
    private $matriz = [];

    function __construct($filas, $columnas)
    {
        $this->filas = $filas;
        $this->columnas = $columnas;

        /*$matriz = [];

        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $matriz[$i][$j] = "b";
            }
        }

        print_r($matriz);
        $this->matriz = $matriz;*/
    }

    public function numFilas()
    {
        return $this->filas;
    }

    public function numColumnas()
    {
        return $this->columnas;
    }

    public function posicionMatiz($fila, $columna)
    {
        return $this->matriz[$fila][$columna];
    }

    public function llenarMatriz($contenido)
    {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $this->matriz[$i][$j] = $contenido[$i][$j];
            }
        }
    }

    public function mostrarMatrix()
    {
        echo "<table>";
        for ($i = 0; $i < $this->filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $this->columnas; $j++) {
                echo "<td> " . $this->matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$matrix = new Matrix(4, 3);
$llenar = $matrix->llenarMatriz($cars);
$tabla = $matrix->mostrarMatrix();