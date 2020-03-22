<?php
$aantalLijnen = 7;
for ( $i = 1 ; $i <= $aantalLijnen ; $i++ ){
    print(str_repeat(" ", $aantalLijnen - $i) . str_repeat("#", $i) . "\n");
}