<?php

class clinic {
    private $client=[];
	private $data=[];
    private $file;
	private $visitas=[];

    public function __construct($file) {
        $this->file = $file;
        $this->loadData($file);
		$this->rellenarVisitas();
    }

    function loadData($fichero) {
        $gestor = fopen($fichero, "r");
		$contador = 0;
        while (($elements = fgetcsv($gestor)) !== false) {
			$visita=[$contador, $elements[0], $elements[2], $elements[1], $elements[3]];
			array_push($this->data, $visita);
		   	$contador = $contador + 1;
        }
        fclose($gestor);
    }

	function rellenarVisitas(){
		for ($i=0; $i < count($this->data); $i++) { 
			array_push($this->visitas, new visits($this->data[$i]));
		}
		
	}

    public function drawVisits() {
		for ($i=0; $i < count($this->visitas); $i++) { 
			$this->visitas[$i]->drawList();
		}
	}

	public function addVisit($nombre, $fecha, $importe, $pagado){
		$id = count($this->data) +1;
		$visita=[$id, $nombre, $fecha, $importe, $pagado];
		array_push($this->data, $visita);
		array_push($this->visitas, new visits($visita));
	}

	public function modifyVisit($id, $nombre, $fecha, $importe, $pagado){
		$visita=[$id, $nombre, $fecha, $importe, $pagado];
		$nuevaVisita = array($id => $visita);
		$this->data = array_replace($this->data, $nuevaVisita);
	}

	public function deleteVisit($id) {
		unset($this->data[$id]);
		header("Location: index.php");  
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