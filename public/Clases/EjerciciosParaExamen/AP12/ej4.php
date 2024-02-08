<?php
 abstract class nombre{
    protected $referncia;
    protected $titulo;

    public function __construct($referncia, $titulo){    
        $this->referncia = $referncia;
        $this->titulo=$titulo;
        }
        abstract function getprop();
}
class obra extends nombre{
    private $autor;
    private $numpag;
    public function __construct($referncia, $titulo , $autor , $numpag  ){    
        parent::__construct($referncia,$titulo);
        $this->autor= $autor;
        $this->numpag = $numpag;
       
        }
        public function getprop(){
            return $this->referncia . $this->titulo .  $this->autor .  $this->numpag ;

}
}
class volumen  extends nombre{
    private $autor;
    private $numpag;
    private $numvol;
    public function __construct($referncia, $titulo , $autor , $numpag , $numvol ){    
        parent::__construct($referncia,$titulo);
        $this->autor= $autor;
        $this->numpag = $numpag;
        $this->numvol = $numvol;
}
public function getprop(){
    return $this->referncia . $this->titulo .  $this->autor .  $this->numpag . $this->numvol;

}
}
class Revista  extends nombre{
    private $anyoPub;
    private $numRev;
    public function __construct($referncia, $titulo , $anyoPub , $numRev){    
        parent::__construct($referncia,$titulo);
        $this->anyoPub= $anyoPub;
        $this->numRev = $numRev;
}
public function getprop(){
    return $this->referncia . $this->titulo .  $this->anyoPub . $this->numRev;

}
}
$obra = new Obra("REF123", "La Obra", "Dani" , "Autor Obra");
$volumen = new Volumen("REF456", "El Volumen", "Aitor" , "Autor Volumen", 200);
$revista = new Revista("REF789", "La Revista", "Autor Revista", 50, 3);

echo "Información de la Obra:\n";
$obra->getprop();
echo "\n";

echo "Información del Volumen:\n";
$volumen->getprop();
echo "\n";

echo "Información de la Revista:\n";
$revista->getprop();
?>