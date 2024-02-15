<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir visita</title>
    <link rel="stylesheet" href="./CSS/estilos.css">

</head>
<body>

    <h2>Añadir visita</h2>

    <form action="#" method="post">
        <label for="nombre">Nombre del Paciente:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="importe">Importe:</label>
        <input type="number" id="importe" name="importe" step="0.01" required>

        <label for="pagado">¿Ha pagado?</label>
        <input type="checkbox" id="pagado" name="pagado">

        <br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>