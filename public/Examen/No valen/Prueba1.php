<?php

// Ruta al archivo CSV
$csvFile = 'data.csv';

// Lee el archivo CSV
$rows = array_map('str_getcsv', file($csvFile));

// Encabezados de la tabla
echo '<table border="1">
        <tr>
            <th>Paciente</th>
            <th>Fecha</th>
            <th>Importe</th>
            <th>Ha Pagado</th>
            <th>Borrar</th>
            <th>Modificar</th>
        </tr>';

// Recorre los datos y muestra cada fila como una fila de la tabla
foreach ($rows as $row) {
    $paciente = $row[0];
    $fecha = $row[2];
    $importe = $row[1];
    $haPagado = $row[3];

    // URL de los iconos
    $iconoBorrar = 'iconos/x.png';
    $iconoModificar = 'iconos/pencil.png';

    echo '<tr>
            <td>' . $paciente . '</td>
            <td>' . $fecha . '</td>
            <td>' . $importe . '</td>
            <td>' . ($haPagado == 'True' ? 'Sí' : 'No') . '</td>
            <td><img src="' . $iconoBorrar . '" alt="Borrar" width="25"></td>
            <td><a href="modificar.php?paciente=' . $paciente . '"><img src="' . $iconoModificar . '" alt="Modificar" width="25"></a></td>
          </tr>';
}

// Cierra la tabla
echo '</table>';

?>

