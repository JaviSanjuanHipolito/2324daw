<?php

class Paciente {
    public $identificador_paciente;
    public $nombre;
    public $direccion;
    

    public function __construct($identificador_paciente, $nombre, $direccion) {
        $this->identificador_paciente = $identificador_paciente;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }
}

?>