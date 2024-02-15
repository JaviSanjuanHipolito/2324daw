<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Información</title>
    <link rel="stylesheet" href="./CSS/estilos.css">

</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $importe = $_POST['importe'];
    $pagado = isset($_POST['pagado']) ? 'Sí' : 'No';

    // Actualizar el archivo CSV
    $linea_modificada = "$nombre,$fecha,$importe,$pagado\n";
    $archivo_csv = 'data.csv';
    
    // Leer el archivo CSV y actualizar la línea correspondiente
    $lineas = file($archivo_csv);
    foreach ($lineas as &$linea) {
        $datos = explode(',', $linea);
        if ($datos[0] === $nombre && $datos[1] === $fecha) {
            $linea = $linea_modificada;
            break;
        }
    }

    // Escribir las líneas actualizadas al archivo
    file_put_contents($archivo_csv, implode('', $lineas));

    echo "Información actualizada correctamente.";
} else {
    // Mostrar el formulario
?>
    <h2>Modificar Información</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="fecha">Fecha:</label>
        <input type="text" name="fecha" required><br>

        <label for="importe">Importe:</label>
        <input type="text" name="importe" required><br>

        <label for="pagado">¿Ha pagado?</label>
        <input type="checkbox" name="pagado"><br>

        <input type="submit" value="Actualizar">
    </form>
<?php } ?>

</body>
</html>