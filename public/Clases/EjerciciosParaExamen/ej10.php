<?php
class Hosteleria{
  protected  $mesas;
  protected $camareros;
  protected $cocineros; 
  protected $precioMenu;
  public function __construct($mesas, $camareros,$cocineros, $precioMenu){
 $this->mesas = $mesas;
 $this->camareros=$camareros;
 $this->cocineros= $cocineros;
 $this->precioMenu=$precioMenu;

  }
  public function ServicioCliente(){
    return ($this->mesas > $this->camareros)? "bueno" : "malo";
  }

}
class Bar extends Hosteleria{
    private $metrosBarra;
    public function __construct($mesas, $camareros, $cocineros, $precioMenu, $metrosBarra){
        parent::__construct($mesas, $camareros, $cocineros, $precioMenu);
        $this->metrosBarra = $metrosBarra;
    }
}
class Restaurante extends Hosteleria{
    private $estrellasMichelin;
    public function __construct($mesas, $camareros, $cocineros, $precioMenu, $estrellasMichelin){
        parent::__construct($mesas, $camareros, $cocineros, $precioMenu);
        $this->estrellasMichelin = $estrellasMichelin;
    }
}
class Burguer extends Hosteleria{
    private $servicioDomicilio;
    public function __construct($mesas, $camareros, $cocineros, $precioMenu, $servicioDomicilio){
        parent::__construct($mesas, $camareros ,$cocineros, $precioMenu);
        $this->servicioDomicilio = $servicioDomicilio;

    }
    public function ServicioCliente(){
        return ($this->mesas > $this->camareros/3)? "bueno" : "malo";
      }
}
$bar = new Bar(10, 10, 5, 12, 7);
$restaurante = new Restaurante(10, 5, 3, 25, 1);
$burguer = new Burguer(15, 0, 6, 7,false);
echo "Servicio en el bar: " . $bar->servicioCliente() . "<br>" . "\n";
echo "Servicio en el restaurante: " . $restaurante->servicioCliente()."<br>" ."\n";
echo "Servicio en el burguer: ". $burguer->servicioCliente();
?>