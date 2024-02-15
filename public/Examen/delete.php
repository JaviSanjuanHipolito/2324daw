<?php

require_once "autoloader.php";
$clinic = new Clinic();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = null;
}

$clinic->deleteVisit($id);

echo "Visita borrada correctamente";

?>