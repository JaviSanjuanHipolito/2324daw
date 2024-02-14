<?php

class visits {
	protected $id=[];
    protected $patient=[];
    protected $date=[];
    protected $amount=[];
    protected $paid=[];

	function __construct($data) {
		array_push($this->id, $data[0]);
		array_push($this->patient, $data[1]);
		array_push($this->date,  $data[2]);
		array_push($this->amount,  $data[3]);
		array_push($this->paid,  $data[4]);
	}

	public function drawList() {
		
		for ($i=0; $i < count($this->id); $i++) { 
			
			echo "<tr " . amount($this->amount[$i]) . ">";
			echo "<td>" . $this->id[$i] . "</td>";
			echo "<td>" . $this->patient[$i] . "</td>";
			echo "<td>" . dateFormat($this->date[$i]) . "</td>";
			echo "<td>" . moneyFormat($this->amount[$i]) . "</td>";
			if ($this->paid[$i] == 'True') {
				echo "<td class='pagado' >Sí</td>";
			} else {
				echo "<td class='noPagado'>No</td>";
			}
			echo "<td><a href='Borrar_visita.php'><img src='./Icons/x.png' style='width: 20px; height: 20px;' alt='Borrar'></a></td>";
			echo "<td><a href='Modificar_visita.php'><img src='./Icons/pencil.png' style='width: 20px; height: 20px;' alt='Modificar'></a></td>";
			echo "<td><a href='Añadir_visita.php'><img src='./Icons/add.png' style='width: 20px; height: 20px;' alt='Añadir'></a></td>";
			echo "</tr>";
			
		}
	}
}