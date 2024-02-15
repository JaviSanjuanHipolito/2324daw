<?php
    require_once "autoloader.php";

    $clinic = new Clinic();
    $datos = $clinic->getDatos();

    $id = $_GET['id'];

    $pos = "";
	for ($i=0; $i < count($datos); $i++) { 
		if ($datos[$i][0] === $id) {
			$pos = $i;
		}
	}

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $pagado = isset($_POST['pagado']) ? 'True' : 'False';
        $clinic->modifyVisit($_GET['id'], $_POST['nombre'], $_POST['fecha'], $_POST['importe'], $pagado);
        
    
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar visita</title>
    <link rel="stylesheet" href="./CSS/estilos.css">

</head>
<body>

<?php
    echo "<h2>Modificar visita</h2>";
    echo "<form method='post' action=''>";
    echo "<label for='nombre'>Nombre:</label>";
    echo "<input type='text' name='nombre' value='" . $datos[$pos][1] . "' required><br>";
    
    echo "<label for='fecha'>Fecha:</label>";
    echo "<input type='text' name='fecha' value='" . $datos[$pos][2] . "' required><br>";
    
    echo "<label for='importe'>Importe:</label>";
    echo "<input type='text' name='importe' value='" . $datos[$pos][3] . "' required><br>";
    
    echo "<label for='pagado'>¿Ha pagado?</label>";
    if ($datos[$pos][4] === "True"){
        echo "<input type='checkbox' name='pagado' checked><br>";
    } else {
        echo "<input type='checkbox' name='pagado'><br>";
    }
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
?>

</body>
</html>