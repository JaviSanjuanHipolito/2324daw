<?php

class Clinic {
    private $data;
	private $datos=[];
	private $visitas=[];
	private $pacientes=[];

	public function __construct() {
        $this->data = new data();
		$this->datos = $this->data->getData();
		$this->rellenarVisitas();
    }

	function getDatos() {
		return $this->datos;
	}

	function rellenarVisitas(){
		for ($i=0; $i < count($this->datos); $i++) { 
			array_push($this->visitas, new visits($this->datos[$i]));
		}
	}

    public function drawVisits() {
		for ($i=0; $i < count($this->visitas); $i++) { 
			$this->visitas[$i]->drawList();
		}
	}

	public function addVisit($nombre, $fecha, $importe, $pagado){
		$pos = count($this->datos) -1;
		$id = $this->datos[$pos][0] +1;
		$visita=[$id, $nombre, $fecha, $importe, $pagado];
		array_push($this->datos, $visita);
		$this->data->modifyVisit($this->datos);
	}

	public function modifyVisit($id, $nombre, $fecha, $importe, $pagado){
		$visita=[$id, $nombre, $fecha, $importe, $pagado];
		$pos = posicion($id, $this->datos);
		$this->datos[$pos] = $visita;
		$this->data->modifyVisit($this->datos);
	}

	public function deleteVisit($id) {
		$pos = posicion($id, $this->datos);
		unset($this->datos[$pos]);
		$this->data->modifyVisit($this->datos);
	}
}

function dateFormat($date) {
	$newDate = date("F d, Y", strtotime($date));
	return $newDate;
}

function moneyFormat($numero) {
	$nombre_format = number_format($numero, 2, '\'', '.');
	return $nombre_format . " €";
}

function amount($dinero) {
	if ($dinero >= 250) {
		return "class='precio'";
	}
}

function posicion($id, $datos){
	$pos = "";
	for ($i=0; $i < count($datos); $i++) { 
		if ($datos[$i][0] === $id) {
			$pos = $i;
		}
	}

	return $pos;
}