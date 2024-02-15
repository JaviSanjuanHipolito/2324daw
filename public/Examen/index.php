<?php
require_once "autoloader.php";

$csvFile = 'data.csv';
$visitas = new clinic($csvFile);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Pacientes</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>

<div class="mi-tabla">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Fecha</th>
                <th>Importe</th>
                <th>Ha Pagado</th>
                <th>Borrar</th>
                <th>Modificar</th>
                <th>Añadir</th>
            </tr>
        </thead>
        <tbody>
            <?php  $datos = $visitas->drawVisits(); ?>
        </tbody>
    </table>
</div>
</body>
</html>

