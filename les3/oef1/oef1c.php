<?php
$aantalLijnen = 7;
$vorige = 0;
for ($i = 1; $i <= $aantalLijnen; $i++) {
    $aantalSpaties = $aantalLijnen - $i;
    print(str_repeat(" ", $aantalSpaties) . str_repeat("#", $i + $vorige) . str_repeat(" ", $aantalSpaties) . "\n");
    $vorige = $i;
}