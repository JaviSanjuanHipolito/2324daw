<?php

class VisitaPaciente {
    private $nombrePaciente;
    private $fecha;
    private $importe;
    private $pagada;

    public function __construct($nombrePaciente, $fecha, $importe, $pagada) {
        $this->nombrePaciente = $nombrePaciente;
        $this->fecha = $fecha;
        $this->importe = $importe;
        $this->pagada = $pagada;
    }

    public function getNombrePaciente() {
        return $this->nombrePaciente;
    }

    public function getFecha() {
        return $this->fecha;
    }

    function formatearFecha($fecha) {
        $newDate = date("F d, Y", strtotime($fecha));
        return $fecha;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function estaPagada() {
        return $this->pagada;
    }

    function formatearMoneda($importe) {
        $nombre_format = number_format($importe, 2, '\'', '.');
        return $importe . " €";
    }
}
