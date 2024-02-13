<?php

$csvFile = 'data.csv';
$rows = array_map('str_getcsv', file($csvFile));

foreach ($rows as $row) {

    $paciente = $row[0];
    $fecha = $row[2];
    $importe = $row[1];
    $haPagado = $row[3];

    $iconoBorrar = 'iconos/x.png';
    $iconoModificar = 'iconos/pencil.png';
    $iconAñadir = 'iconos/add.png';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Pacientes</title>
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body>

<div class="mi-tabla">
    <table>
        <thead>
            <tr>
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
            <?php
            $csvFile = 'data.csv';
            $rows = array_map('str_getcsv', file($csvFile));

            
            foreach ($rows as $row) {
                $paciente = $row[0];
                $fecha = $row[2];
                $importe = $row[1];
                $haPagado = $row[3];

                $iconoBorrar = 'Icons/x.png';
                $iconoModificar = 'Icons/pencil.png';
                $iconAñadir = 'Icons/add.png';

                echo '<tr>
                        <td>' . $paciente . '</td>
                        <td>' . $fecha . '</td>
                        <td>' . $importe . '</td>
                        <td>' . ($haPagado == 'True' ? 'Sí' : 'No') . '</td>
                        <td><a href="Borrar_visita.php"><img src="' . $iconoBorrar . '" style="width: 20px; height: 20px;" alt="Borrar"></a></td>
                        <td><a href="Modificar_visita.php"><img src="' . $iconoModificar . '" style="width: 20px; height: 20px;" alt="Modificar"></a></td>
                        <td><a href="Añadir_visita.php"><img src="' . $iconAñadir . '" style="width: 20px; height: 20px;" alt="Añadir"></a></td>
                      </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

