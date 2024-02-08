<?php

class Visita {
    public $paciente;
    public $importe;
    public $fecha;
    public $pagada;

    public function __construct($paciente, $importe, $fecha, $pagada) {
        $this->paciente = $paciente;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->pagada = $pagada;
    }

    
}

class visualizacionVisita {
    protected $visitas = [];

    public function visualizarInformacion() {
        
        foreach ($this->visitas as $visita) {
            echo "<tr>";
            echo "<td>$visita->paciente</td>";
            echo "<td>$visita->fecha</td>";
            echo "<td>$visita->importe</td>";
            echo "<td>" . ($visita->pagada ? 'Si' : 'No') . "</td>";
            echo "</tr>";
            echo "<button><img src='iconos/x.png'></button>";
            echo "<button><img src='iconos/pencil.png'></button>";
        }
    }
}


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='#' method='post'>
        <label for='nombrePaciente'>Nombre del Paciente:</label>
        <input type='text' id='nombrePaciente' name='nombrePaciente' required>
        <br>
        <label for='importe'>Importe:</label>
        <input type='number' id='importe' name='importe' required>
        <br>
        <label for='fecha'>Fecha:</label>
        <input type='date' id='fecha' name='fecha' required>
        <br>
        <label for='pagado'>¿Está pagado?</label>
        <input type='checkbox' id='pagado' name='pagado'>
        <br>
        <input type='submit' value='Enviar'>
        <button onclick="addVisita()">Añadir</button>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Fecha</th>
                <th>Importe</th>
                <th>Pagado</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4">

                </td>
            </tr>
        </tfoot>
        <tbody>
		<?php $datos = $cartera->drawlist($data); ?>
        </tbody>
    </table>

</body>
</html>