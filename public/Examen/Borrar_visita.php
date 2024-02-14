<?php

require_once "autoloader.php";

$clinica = new $clinica("data.csv");

if (isset($_GET['id'])) {
    $clinica->delete($_GET['id']);
} else {
    $clinica->delete(null);
}
header("Location: index.php");  