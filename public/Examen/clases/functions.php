<?php

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

?>