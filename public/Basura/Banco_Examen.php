<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
<h1>Cajero</h1>
<form  method="post">
    <label for="text">Titular de la cuenta</label>
    <input type="text" id="numero" name="numero" required>
    <br>
    <label for="numero">Cuanto quieres ingresar en la cuenta corriente?</label>
    <input type="number" id="numero" name="numero">
    <br>
    <label for="numero">Cuanto quieres retirar en la cuenta corriente?</label>
    <input type="number" id="numero" name="numero">
    <br>
    <label for="numero">Modifica el interes</label>
    <input type="number" id="numero" name="numero">
    <br>
    <label for="numero">Modifica la inversion</label>
    <input type="number" id="numero" name="numero">
    <br>
    <button type="submit">Calcular</button>
    
</form>


<?php

class CuentaBancaria {
    protected $titular;
    protected $cantidad;

    public function __construct($titular, $cantidad = 0) {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }

    public function ingresar($saldo) {
        $this->cantidad + $saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getCantidad() {
        return $this->cantidad;
    }
}

class CuentaCorriente extends CuentaBancaria {
    public function retirar($saldo) {
        if ($saldo < $this->cantidad) {
            $this->cantidad - $saldo;
        } else {
            echo "No hay suficiente saldo en la cuenta corriente.\n";
        }
    }
}

class CuentaAhorro extends CuentaBancaria {
    private $interes;

    public function __construct($titular, $cantidad = 0, $interes = 0) {
        parent::__construct($titular, $cantidad);
        $this->interes = $interes;
    }

    public function ingresar($saldo) {
        parent::ingresar($saldo + ($saldo * $this->interes / 100));
    }

    public function modificarInteres($nuevoInteres) {
        $this->interes = $nuevoInteres;
    }
}

class CuentaInversion extends CuentaBancaria {
    private $inversion;

    public function __construct($titular, $cantidad = 0, $inversion = 0) {
        parent::__construct($titular, $cantidad);
        $this->inversion = $inversion;
    }

    public function retirar($saldo) {
        $limiteRetiro = $this->cantidad - ($this->cantidad * $this->inversion / 100);
        if ($saldo < $limiteRetiro) {
            $this->cantidad - $saldo;
        } else {
            echo "No se puede retirar esa cantidad debido a la inversión.\n";
        }
    }

    public function modificarInversion($nuevaInversion) {
        $this->inversion = $nuevaInversion;
    }
}
?>


</body>
</html>

