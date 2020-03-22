<?php
function faculteit($getal) {
    if ($getal < 2) {
        return 1;
    } else {
        return ($getal * faculteit($getal - 1));
    }
}