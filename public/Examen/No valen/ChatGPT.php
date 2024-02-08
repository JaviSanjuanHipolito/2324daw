<?php

class Visita {
    public $paciente;
    public $importe;
    public $fecha;
    public $pagada;

    public function __construct($paciente, $importe, $fecha, $pagada) {
        $this->paciente = $paciente;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->pagada = $pagada;
    }
}

class GestionVisitas {
    private $visitas = [];

    public function visualizarInformacion() {
        echo "<table border='1'>";
        echo "<tr><th>Paciente</th><th>Fecha</th><th>Importe</th><th>Pagada</th></tr>";

        foreach ($this->visitas as $visita) {
            echo "<tr>";
            echo "<td>$visita->paciente</td>";
            echo "<td>$visita->fecha</td>";
            echo "<td>$visita->importe</td>";
            echo "<td>" . ($visita->pagada ? 'Sí' : 'No') . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    public function añadirVisita($paciente, $importe, $fecha, $pagada) {
        $nuevaVisita = new Visita($paciente, $importe, $fecha, $pagada);
        $this->visitas[] = $nuevaVisita;
    }

    public function eliminarVisita($paciente, $fecha) {
        $this->visitas = array_filter($this->visitas, function ($visita) use ($paciente, $fecha) {
            return !($visita->paciente == $paciente && $visita->fecha == $fecha);
        });
    }

    public function modificarVisita($paciente, $fecha, $nuevoImporte, $nuevaPagada) {
        foreach ($this->visitas as $visita) {
            if ($visita->paciente == $paciente && $visita->fecha == $fecha) {
                $visita->importe = $nuevoImporte;
                $visita->pagada = $nuevaPagada;
                break;
            }
        }
    }
}

// Ejemplo de uso
$gestionVisitas = new GestionVisitas();

// Añadir visitas
$gestionVisitas->añadirVisita("Patient1", 200, "2024-02-06", true);
$gestionVisitas->añadirVisita("Patient2", 150, "2024-02-07", false);

// Visualizar información en una tabla
$gestionVisitas->visualizarInformacion();

// Modificar visita
$gestionVisitas->modificarVisita("Patient1", "2024-02-06", 250, false);

// Visualizar información actualizada en una tabla
$gestionVisitas->visualizarInformacion();

// Eliminar visita
$gestionVisitas->eliminarVisita("Patient2", "2024-02-07");

// Visualizar información después de eliminar en una tabla
$gestionVisitas->visualizarInformacion();

?>
