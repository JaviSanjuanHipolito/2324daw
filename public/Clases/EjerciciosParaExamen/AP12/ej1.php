<?php 
class intrumento{
    protected $musico;
    protected $notas;
    public function __construct($musico,$notas){
        $this->musico = $musico;
        $this->notas = $notas;
    }
    public function musicoimpor(){
        return $this->musico;
    }
    public function notas(){
        return $this->notas;
    }
    public function tocar(){
        echo "reproduciendo" . get_class($this) . "!/n";
    } 
}
class guitarra extends intrumento{
    private $cuerdas;
    public function __construct($musico, $notas, $cuerdas){
        parent::__construct($musico, $notas);
        $this->cuerdas=$cuerdas;
    }
    public function cuerdas(){
        return $this->cuerdas;
    }
}
class xilofono extends intrumento{
    private $llaves;
    public function __construct($musico, $notas, $llaves){
        parent::__construct($musico, $notas);
        $this->llaves=$llaves;
    }
    public function llaves(){
        return $this->llaves;
    }
}
class trompeta extends intrumento{
private $material;
public function __construct($musico, $notas, $material){
    parent::__construct($musico, $notas);
        $this->material=$material;
    }
    public function material(){
        return $this->material;
    }
}
class tambor extends intrumento{
    private $material;
    public function __construct($musico, $notas, $material){
        parent::__construct($musico, $notas);
            $this->material=$material;
        }
        public function material(){
            return $this->material;
        }
}
class saxofon extends intrumento{
    private $saxofon;
    public function __construct($musico, $notas, $saxofon){
        parent::__construct($musico,$notas);
        $this->saxofon =$saxofon;
}
public function saxofon() {
    return $this->saxofon;    
}

}
class piano extends intrumento{
    private $teclas;
    public function __construct($musico, $notas, $teclas){
        parent::__construct($musico,$notas);
        $this->teclas =$teclas;
}
public function teclas() {
    return $this->teclas;    
}
}
$guitarra = new Guitarra("Paco de Lucia", ["Do", "Re", "Mi"], 6);
$xilofono = new Xilofono("Jorge", ["Do", "Re", "Mi", "Fa", "Sol"],4);
$trompeta = new Trompeta("David", ["Do", "Re", "Mi"], 7);
$tambor = new Tambor("Jonnathan", ["Tamborileo"], 3);
$saxofon = new Saxofon("pedro", ["Do", "Re", "Mi", "Fa", "Sol"], 4);
$piano = new Piano("Beethoven", ["Do", "Re", "Mi", "Fa", "Sol", "La", "Si"], 88);


$guitarra->tocar();
$xilofono->tocar();
$trompeta->tocar();
$tambor->tocar();
$saxofon->tocar();
$piano->tocar();
?>
