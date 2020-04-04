<?php
function maakRij(int $min, int $max, int $stap = 1): array
{
    $resultaat = array();
    if ($min < $max) {
        for ($i = $min; $i <= $max; $i = $i + $stap) {
            $resultaat[] = $i;
        }
    } else {
        for ($i = $min; $i >= $max; $i = $i - $stap) {
            $resultaat[] = $i;
        }
    }
    return $resultaat;
}

var_dump(maakRij(1, 5, 2));
var_dump(maakRij(5, 1, 2));