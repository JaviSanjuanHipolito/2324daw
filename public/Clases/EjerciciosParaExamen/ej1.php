<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Volumen de Círculo</title>
</head>
<body>

<form  method="post">
    <label for="diametro">Ingrese el diámetro del círculo:</label>
    <input type="number" id="diametro" name="diametro" required>
    <button type="submit">Calcular Volumen</button>
</form>
<?php
class Circulo {
    private $diametro;
  
    public function __construct($diametro) {
        $this->diametro = $diametro;
    }

    public function volumen() {
        return 4/3 * 3.14 * pow($this->diametro/2, 3);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $diametroFromPost = isset($_POST['diametro']) ? $_POST['diametro'] : null;


    
        $circulo = new Circulo($diametroFromPost);

        echo "Volumen del círculo: " . $circulo->volumen() . "<br>";
   
    
}

?>
</body>
</html>