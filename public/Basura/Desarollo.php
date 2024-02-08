<?php

function ordenar ($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                print_r($arr);
                echo "<br>";
                $temp = $arr[$j];
                print_r($arr);
                echo "<br>";
                $arr[$j] = $arr[$j + 1];
                print_r($arr);
                echo "<br>";
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

//Ejemplo de uso
$originalArray = [64, 34, 25, 12, 22, 11, 90];
echo "Array orginial: " . implode(",", $originalArray) . "\n";

$sortedArray = ordenar($originalArray);
echo "Array ordenado: " . implode(",", $sortedArray) . "\n";

?>

