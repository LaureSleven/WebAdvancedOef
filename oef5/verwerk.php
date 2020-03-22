<?php
require_once ( 'wiskunde.php' );
$input = $_GET['getal'];
if (ctype_digit($input)) {
    print(faculteit($input));
} else {
    print('Foute input: ' . $input);
}