<?php
    require_once "autoloader.php";

    $clinic = new Clinic();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $pagado = isset($_POST['pagado']) ? 'True' : 'False';
        $clinic->addVisit($_POST['nombre'], $_POST['fecha'], $_POST['importe'], $pagado);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir visita</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>
    
<?php
    echo "<h2>Añadir visita</h2>";
    echo "<form method='post' action=''>";
    echo "<label for='nombre'>Nombre:</label>";
    echo "<input type='text' name='nombre' required><br>";

    echo "<label for='fecha'>Fecha:</label>";
    echo "<input type='text' name='fecha' required><br>";

    echo "<label for='importe'>Importe:</label>";
    echo "<input type='text' name='importe' required><br>";

    echo "<label for='pagado'>¿Ha pagado?</label>";
    echo "<input type='checkbox' name='pagado'><br>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
?>

</body>
</html>