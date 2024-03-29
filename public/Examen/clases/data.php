<?php

class data {
    private $file = "data.csv";
    private $data=[];

    public function __construct() {
		$this->readFile();
       
    }

    function readFile() {
        $fp = fopen($this->file, "r");
        $contador = 0;
        while (($datos = fgetcsv($fp)) !== false) {
            $dato = [$datos[0], $datos[1], $datos[2], $datos[3], $datos[4]];
            array_push($this->data, $dato);
            $contador += 1;
        }
        fclose($fp);
    }

    function getData(){
        return $this->data;
    }

    function modifyVisit($datos){
        $this->entyFile();
        $this->writeFile($datos);
        header('Location: index.php');
    }

    function writeFile($datos) {
        $fp = fopen($this->file, "w");
        foreach ($datos as $fila) {
            fputcsv($fp, array_values($fila));
        }
        fclose($fp);
    }

    function entyFile(){
        $fp = fopen($this->file, "r");
        while (($line = fgets($fp)) !== false) {
            $line = trim(preg_replace('/\s+/', ' ', $line));
            if ( $line == "") continue;
        }
        fclose($fp);
    }
    

}

/*$data = [
    ["Patient42", 486, "2010-07-31", false],
    ["Patient47", 248, "2023-01-05", false],
    ["Patient19", 387, "2018-05-30", true],
    ["Patient3", 115, "2014-03-04", true],
    ["Patient41", 242, "2021-12-26", false],
    ["Patient31", 239, "2015-10-07", false],
    ["Patient39", 256, "2023-06-13", false],
    ["Patient38", 81, "2016-05-04", false],
    ["Patient10", 323, "2016-12-03", true],
    ["Patient27", 150, "2015-10-28", true],
    ["Patient44", 356, "2015-01-02", false],
    ["Patient25", 494, "2021-12-21", false],
    ["Patient44", 413, "2013-10-07", true],
    ["Patient30", 202, "2015-05-30", false],
    ["Patient46", 403, "2020-11-29", true],
    ["Patient22", 222, "2017-10-27", false],
    ["Patient7", 54, "2013-04-29", true],
    ["Patient16", 254, "2015-10-10", true],
    ["Patient46", 475, "2020-02-28", false],
    ["Patient26", 129, "2018-06-22", false],
    ["Patient33", 156, "2018-08-01", true],
    ["Patient35", 304, "2017-07-23", false],
    ["Patient46", 279, "2015-09-09", true],
    ["Patient50", 283, "2021-09-18", true],
    ["Patient46", 103, "2013-05-08", true],
    ["Patient2", 135, "2017-06-27", true],
    ["Patient39", 373, "2020-10-28", true],
    ["Patient24", 432, "2011-01-09", true],
    ["Patient5", 369, "2020-08-24", true],
    ["Patient16", 177, "2023-03-29", false],
    ["Patient12", 476, "2019-08-04", false],
    ["Patient22", 66, "2019-06-06", true],
    ["Patient31", 238, "2015-06-01", true],
    ["Patient8", 166, "2019-01-12", true],
    ["Patient28", 453, "2023-01-15", false],
    ["Patient35", 59, "2021-03-17", true],
    ["Patient47", 73, "2015-06-07", false],
    ["Patient22", 182, "2020-10-14", true],
    ["Patient40", 285, "2013-08-18", false],
    ["Patient23", 231, "2018-04-09", true],
    ["Patient10", 248, "2013-06-22", true],
    ["Patient6", 398, "2019-06-09", true],
    ["Patient36", 282, "2010-06-15", false],
    ["Patient44", 346, "2014-10-13", false],
    ["Patient48", 400, "2010-01-02", true],
    ["Patient47", 62, "2019-07-17", true],
    ["Patient47", 301, "2010-05-27", false],
    ["Patient12", 180, "2016-07-08", false],
    ["Patient27", 89, "2021-12-08", true],
    ["Patient6", 312, "2013-03-18", false],
    ["Patient21", 321, "2020-01-29", true],
    ["Patient4", 150, "2016-07-25", true],
    ["Patient4", 395, "2013-08-06", true],
    ["Patient25", 310, "2018-04-14", false],
    ["Patient45", 228, "2018-09-29", true],
    ["Patient3", 379, "2012-01-29", true],
    ["Patient45", 126, "2013-07-23", true],
    ["Patient7", 165, "2021-11-21", true],
    ["Patient35", 357, "2023-08-30", false],
    ["Patient39", 375, "2019-11-13", false],
    ["Patient19", 75, "2022-04-28", false],
    ["Patient25", 461, "2014-11-23", false],
    ["Patient33", 87, "2011-07-02", true],
    ["Patient24", 311, "2023-02-16", false],
    ["Patient3", 111, "2022-11-18", true],
    ["Patient2", 334, "2012-01-30", true],
    ["Patient30", 136, "2013-01-30", false],
    ["Patient21", 152, "2014-02-12", true],
    ["Patient8", 416, "2021-08-17", false],
    ["Patient21", 379, "2015-06-23", true],
    ["Patient8", 54, "2022-12-28", false],
    ["Patient49", 291, "2010-01-17", true],
    ["Patient32", 377, "2019-10-01", true],
    ["Patient15", 86, "2016-04-30", false],
    ["Patient33", 99, "2015-11-19", false],
    ["Patient32", 215, "2020-05-23", false],
    ["Patient19", 434, "2012-12-26", true],
    ["Patient27", 297, "2014-03-21", true],
    ["Patient14", 143, "2018-12-06", false],
    ["Patient11", 470, "2020-09-11", true],
    ["Patient25", 378, "2018-06-03", false],
    ["Patient9", 254, "2017-11-01", true],
    ["Patient37", 72, "2023-11-14", true],
    ["Patient34", 351, "2020-09-30", true],
    ["Patient17", 158, "2016-06-10", false],
    ["Patient40", 139, "2021-10-06", false],
    ["Patient20", 225, "2016-01-28", false],
    ["Patient11", 276, "2012-04-22", true],
    ["Patient11", 409, "2019-07-01", false],
    ["Patient45", 471, "2019-05-19", false],
    ["Patient6", 319, "2021-11-26", true],
    ["Patient44", 270, "2014-02-24", true],
    ["Patient29", 450, "2023-02-07", false],
    ["Patient15", 393, "2019-09-02", false],
    ["Patient20", 259, "2012-05-29", false],
    ["Patient31", 194, "2016-11-03", false],
    ["Patient21", 160, "2022-04-13", false],
    ["Patient38", 341, "2023-11-13", true],
    ["Patient28", 236, "2010-04-30", true],
    ["Patient2", 91, "2010-01-28", true],
];

$id = 0;
foreach($data as &$idi){
    $idi["ID"] = $id++;
}

$gestor = fopen("data.csv", "w");
foreach ($data as $fila) {
    fputcsv($gestor, array_values($fila));
}

fclose($gestor);*/