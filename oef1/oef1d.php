<?php
$aantalLijnen = 7;
$vorige = 0;
$index = 0;
for ($i = 1; $i <= $aantalLijnen; $i++) {
    $aantalSpaties = $aantalLijnen - $i;
    $aantalHekjes = $i + $vorige;
    $lijn = '';
    for ($j = 0; $j < $aantalHekjes; $j++) {
        $lijn = hekjeOfApenstaartje($lijn, $index);
        $index++;
    }
    print(str_repeat(' ', $aantalSpaties) . $lijn . str_repeat(' ', $aantalSpaties) . "\n");
    $vorige = $i;
}

function hekjeOfApenstaartje($lijn, $index) {
    $interval = 5;
    if ($index % $interval == 0) {
        return $lijn . '@';
    } else {
        return $lijn . '#';
    }
}