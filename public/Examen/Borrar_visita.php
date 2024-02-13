<?php

require_once "autoloader.php";
$clinic = new clinic("data.csv");

if (isset($_GET['id'])) {
    $clinic->delete($_GET['id']);
} else {
    $clinic->delete(null);
}
header("Location: index.php");  

