<?php

class visits {
    protected $patient = [];
    protected $date = [];
    protected $amount = [];
    protected $paid = [];

    function loadData() {
        $csvFile = 'data.csv';
        $rows = array_map('str_getcsv', file($csvFile));
    
        foreach ($rows as $row) {
    
            $this->patient = $row[0];
            $this->date = $row[2];
            $this->amount = $row[1];
            $this->paid = $row[3];
    
        }
    }

	public function drawList() {
		
		for ($i=0; $i < count($this->patient); $i++) { 
			
			echo "<tr>";
			echo "<td>" . $this->patient[$i] . "</td>";
			echo "<td>" . dateFormat($this->date[$i]) . "</td>";
			echo "<td>" . moneyFormat($this->amount[$i]) . "</td>";
			echo "<td>" . ($this->paid == 'True' ? 'Sí' : 'No') . "</td>";
			echo "</tr>";
			
		}
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
	if ($dinero > 250) {
		return "class='precio'";
	}
}